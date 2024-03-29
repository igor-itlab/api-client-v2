<?php

namespace ApiClient\Api\ControlPanel\Response\Verification\AmlBot;

class FlowData
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $value;

    /**
     * @param array $flowData
     */
    public function __construct(array $flowData)
    {
        $this->name = $flowData['name'];
        $this->value = $flowData['value'];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}