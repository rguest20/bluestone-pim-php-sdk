<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Idp\Runtime\AdditionalPropertiesInterface;
class UsersIdPicturePutBody implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    protected $files;
    /**
     * @return string|resource|\Psr\Http\Message\StreamInterface
     */
    public function getFiles()
    {
        return $this->files;
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface $files
     *
     * @return self
     */
    public function setFiles($files): self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['files' => ['files', 'getFiles', 'setFiles']];
    }
}