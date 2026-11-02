<?php

declare(strict_types=1);

namespace App\Service;

use App\Api\BluestoneApiException;
use App\Api\Connector\MediaBankConnector;
use App\Migration\MigrationContext;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/** Checkpointed Media Bank upload using a credential-free, allowlisted transfer request. */
final readonly class MediaUploadRunner
{
    public function __construct(
        private MediaBankConnector $mediaBank,
        private HttpClientInterface $transferClient,
        #[\SensitiveParameter] private string $transferEncryptionKey,
        private string $allowedTransferHosts,
    ) {
    }

    /** Submit, transfer and complete a file upload, returning its stable Bluestone asset ID. */
    public function upload(MigrationContext $migration, string $name, string $filePath, ?string $contentType = null, string $context = 'en'): string
    {
        if ($name === '' || strlen($name) > 140 || str_contains($name, ':')) {
            throw new \InvalidArgumentException('Upload names must contain 1–140 bytes and cannot contain colons.');
        }
        $key = $this->encryptionKey();
        $allowedHosts = $this->hostAllowlist();
        if (!is_file($filePath) || !is_readable($filePath)) {
            throw new \InvalidArgumentException('The media upload file must be a readable regular file.');
        }
        $fileName = basename($filePath);
        $fileHash = hash_file('sha256', $filePath);
        if (!is_string($fileHash)) {
            throw new \RuntimeException('The media upload file could not be fingerprinted.');
        }
        $request = ['fileName' => $fileName];
        if ($contentType !== null) {
            $request['contentType'] = $contentType;
        }

        $submitted = $migration->mutation($name.':submit', 'media-bank', 'createAsset', [
            'request' => $request,
            'file_sha256' => $fileHash,
            'context' => $context,
        ], function () use ($request, $fileHash, $context, $key): array {
            $response = $this->mediaBank->executeTyped('createAsset', [], [
                'headers' => ['context' => $context],
                'json' => $request,
            ]);
            $data = $response->toArray(false);
            $assetId = $data['id'] ?? null;
            $actionUrl = $data['actionUrl'] ?? null;
            $parameters = $data['parameters'] ?? null;
            if (!is_string($assetId) || $assetId === '' || !is_string($actionUrl) || !is_array($parameters)) {
                throw new \UnexpectedValueException('Media Bank returned an incomplete upload acknowledgement.');
            }
            foreach ($parameters as $parameter) {
                if (!is_array($parameter) || !is_string($parameter['key'] ?? null) || !is_string($parameter['value'] ?? null)) {
                    throw new \UnexpectedValueException('Media Bank returned an invalid upload form parameter.');
                }
            }
            $sealedTransfer = $this->seal(json_encode([
                'action_url' => $actionUrl,
                'parameters' => $parameters,
                'file_sha256' => $fileHash,
            ], JSON_THROW_ON_ERROR), $key);

            return ['asset_id' => $assetId, 'transfer' => $sealedTransfer];
        });

        if (!is_array($submitted) || !is_string($submitted['asset_id'] ?? null) || !is_string($submitted['transfer'] ?? null)) {
            throw new \UnexpectedValueException('The stored media upload submission is invalid.');
        }
        $transfer = json_decode($this->open($submitted['transfer'], $key), true, 512, JSON_THROW_ON_ERROR);
        if (!is_array($transfer) || !is_string($transfer['action_url'] ?? null) || !is_array($transfer['parameters'] ?? null)
            || !is_string($transfer['file_sha256'] ?? null) || !hash_equals($fileHash, $transfer['file_sha256'])) {
            throw new \UnexpectedValueException('The stored media upload instructions do not match the current file.');
        }

        $migration->step($name.':transfer', function () use ($migration, $filePath, $fileHash, $fileName, $contentType, $allowedHosts, $transfer): array {
            $url = $this->validatedActionUrl($transfer['action_url'], $allowedHosts);
            $currentHash = hash_file('sha256', $filePath);
            if (!is_string($currentHash) || !hash_equals($fileHash, $currentHash)) {
                throw new \RuntimeException('The media upload file changed after the upload was submitted.');
            }
            $form = [];
            foreach ($transfer['parameters'] as $parameter) {
                if (!is_array($parameter) || !is_string($parameter['key'] ?? null) || !is_string($parameter['value'] ?? null)
                    || $parameter['key'] === '' || strtolower($parameter['key']) === 'file' || array_key_exists($parameter['key'], $form)) {
                    throw new \UnexpectedValueException('Media Bank returned invalid upload form fields.');
                }
                $form[$parameter['key']] = $parameter['value'];
            }
            $signedContentType = null;
            foreach ($transfer['parameters'] as $parameter) {
                if (strcasecmp($parameter['key'], 'Content-Type') === 0) $signedContentType = $parameter['value'];
            }
            if ($contentType !== null && $signedContentType !== null && $contentType !== $signedContentType) {
                throw new \UnexpectedValueException('The requested file content type does not match the signed upload parameters.');
            }
            $fileContentType = $contentType ?? $signedContentType ?? 'application/octet-stream';
            $streamContext = stream_context_create(['http' => ['filename' => $fileName, 'content_type' => $fileContentType]]);
            $stream = fopen($filePath, 'rb', false, $streamContext);
            if (!is_resource($stream)) {
                throw new \RuntimeException('The media upload file could not be opened.');
            }
            try {
                $lastHeartbeat = hrtime(true);
                // The only headers sent here are generated by Symfony for multipart form data.
                $form['file'] = $stream;
                try {
                    $response = $this->transferClient->request('POST', $url, [
                        'body' => $form,
                        'on_progress' => static function (...$progress) use ($migration, &$lastHeartbeat): void {
                            $now = hrtime(true);
                            if ($now - $lastHeartbeat >= 60_000_000_000) {
                                $migration->heartbeat();
                                $lastHeartbeat = $now;
                            }
                        },
                        'max_redirects' => 0,
                        'timeout' => 30,
                        'max_duration' => 3600,
                    ]);
                    $status = $response->getStatusCode();
                    $response->getContent(false);
                    if ($status < 200 || $status >= 300) {
                        throw new BluestoneApiException('Media content transfer', $status);
                    }
                } catch (BluestoneApiException $error) {
                    if (in_array($error->statusCode, [401, 403], true)) {
                        throw new \RuntimeException('The signed media transfer destination was rejected (HTTP '.$error->statusCode.'); it may have expired. The asset ID is retained. Reconcile the upload before starting a new mutation.', 0, $error);
                    }
                    throw $error;
                }
            } finally {
                fclose($stream);
            }

            return ['file_sha256' => $fileHash];
        });

        $completed = $migration->mutation($name.':complete', 'media-bank', 'completeAsset', [
            'id' => $submitted['asset_id'],
            'context' => $context,
        ], function () use ($submitted, $context): array {
            $this->mediaBank->executeTyped('completeAsset', ['id' => $submitted['asset_id']], [
                'headers' => ['context' => $context],
            ]);

            return ['asset_id' => $submitted['asset_id']];
        });

        return $completed['asset_id'];
    }

    private function encryptionKey(): string
    {
        $decoded = base64_decode($this->transferEncryptionKey, true);
        if (!is_string($decoded) || strlen($decoded) !== SODIUM_CRYPTO_SECRETBOX_KEYBYTES) {
            throw new \RuntimeException('Configure BLUESTONE_MEDIA_TRANSFER_KEY as base64 for a 32-byte encryption key.');
        }

        return $decoded;
    }

    /** @return list<string> */
    private function hostAllowlist(): array
    {
        $hosts = array_values(array_filter(array_map(static fn (string $host): string => strtolower(trim($host)), explode(',', $this->allowedTransferHosts))));
        if ($hosts === []) {
            throw new \RuntimeException('Configure BLUESTONE_MEDIA_UPLOAD_HOSTS with the exact HTTPS upload hosts for this tenant.');
        }
        foreach ($hosts as $host) {
            if (preg_match('/^(?:[a-z0-9](?:[a-z0-9.-]*[a-z0-9])?)$/D', $host) !== 1 || str_contains($host, '..')
                || filter_var($host, FILTER_VALIDATE_IP) !== false || in_array($host, ['localhost', 'localhost.localdomain'], true)
                || str_ends_with($host, '.localhost') || str_ends_with($host, '.local')) {
                throw new \RuntimeException('BLUESTONE_MEDIA_UPLOAD_HOSTS must contain exact hostnames without schemes or wildcards.');
            }
        }

        return $hosts;
    }

    /** @param list<string> $allowedHosts */
    private function validatedActionUrl(string $url, array $allowedHosts): string
    {
        $parts = parse_url($url);
        $host = is_array($parts) ? strtolower((string) ($parts['host'] ?? '')) : '';
        if (!is_array($parts) || ($parts['scheme'] ?? null) !== 'https' || $host === ''
            || isset($parts['user']) || isset($parts['pass']) || isset($parts['fragment'])
            || (isset($parts['port']) && $parts['port'] !== 443) || !in_array($host, $allowedHosts, true)) {
            throw new \UnexpectedValueException('Media Bank returned a transfer destination outside the configured HTTPS host allowlist.');
        }

        return $url;
    }

    private function seal(string $plaintext, string $key): string
    {
        $nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

        return base64_encode($nonce.sodium_crypto_secretbox($plaintext, $nonce, $key));
    }

    private function open(string $sealed, string $key): string
    {
        $bytes = base64_decode($sealed, true);
        if (!is_string($bytes) || strlen($bytes) <= SODIUM_CRYPTO_SECRETBOX_NONCEBYTES) {
            throw new \UnexpectedValueException('The stored media upload instructions cannot be decrypted.');
        }
        $nonce = substr($bytes, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
        $plaintext = sodium_crypto_secretbox_open(substr($bytes, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES), $nonce, $key);
        if (!is_string($plaintext)) {
            throw new \UnexpectedValueException('The stored media upload instructions cannot be decrypted.');
        }

        return $plaintext;
    }
}
