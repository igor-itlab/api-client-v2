<?php

namespace ApiClient\Api\ControlPanel\Response\Currency;

class Currency
{
    /**
     * @var string
     */
    protected string $asset;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @return string
     */
    public function getAsset(): string
    {
        return $this->asset;
    }

    /**
     * @param string $asset
     * @return Currency
     */
    public function setAsset(string $asset): Currency
    {
        $this->asset = $asset;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Currency
     */
    public function setType(string $type): Currency
    {
        $this->type = $type;

        return $this;
    }
}