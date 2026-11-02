<?php

declare(strict_types=1);

namespace Youwe\BluestonePim\Console;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Youwe\BluestonePim\BluestonePimBundle;

/** Boots the SDK commands inside the consuming Symfony application's configuration. */
final class SdkConsoleKernel extends BaseKernel
{
    use MicroKernelTrait;

    public function __construct(string $environment, bool $debug, private readonly string $consumerProjectDir)
    {
        parent::__construct($environment, $debug);
    }

    public function getProjectDir(): string
    {
        return $this->consumerProjectDir;
    }

    public function registerBundles(): iterable
    {
        $configured = is_file($this->consumerProjectDir.'/config/bundles.php')
            ? require $this->consumerProjectDir.'/config/bundles.php'
            : [];
        $configured[FrameworkBundle::class] ??= ['all' => true];
        $configured[BluestonePimBundle::class] ??= ['all' => true];

        foreach ($configured as $class => $environments) {
            if ($environments[$this->environment] ?? $environments['all'] ?? false) {
                yield new $class();
            }
        }
    }
}
