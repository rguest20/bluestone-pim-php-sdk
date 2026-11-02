<?php

namespace Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Model;

use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalAndPatternProperties;
use Youwe\BluestonePim\Generated\R2c19c082ed473e21\Pim\Runtime\AdditionalPropertiesInterface;
class AssociateProductAssetsRequest implements AdditionalPropertiesInterface
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
     * The IDs of the existing media-bank assets to attach to the product. Must contain 1 to 100 IDs, and each asset
     * must already exist. These are added to any assets the product already has, not replacing them.
     *
     * @var list<string>
     */
    protected $assets;
    /**
     * The IDs of the existing media-bank assets to attach to the product. Must contain 1 to 100 IDs, and each asset
     * must already exist. These are added to any assets the product already has, not replacing them.
     *
     * @return list<string>
     */
    public function getAssets(): array
    {
        return $this->assets;
    }
    /**
    * The IDs of the existing media-bank assets to attach to the product. Must contain 1 to 100 IDs, and each asset
    must already exist. These are added to any assets the product already has, not replacing them.
    *
    * @param list<string> $assets
    *
    * @return self
    */
    public function setAssets(array $assets): self
    {
        $this->initialized['assets'] = true;
        $this->assets = $assets;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['assets' => ['assets', 'getAssets', 'setAssets']];
    }
}