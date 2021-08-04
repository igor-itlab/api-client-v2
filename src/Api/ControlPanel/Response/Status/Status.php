<?php

namespace ApiClient\Api\ControlPanel\Response\Status;

class Status
{
    /**
     * @var string
     */
    protected string $value;

    /**
     * @var bool
     */
    protected bool $resolution;

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Status
     */
    public function setValue(string $value): Status
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function isResolution(): bool
    {
        return $this->resolution;
    }

    /**
     * @param bool $resolution
     * @return Status
     */
    public function setResolution(bool $resolution): Status
    {
        $this->resolution = $resolution;

        return $this;
    }

}