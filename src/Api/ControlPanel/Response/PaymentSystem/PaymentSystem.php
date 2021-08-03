<?php

namespace ApiClient\Api\ControlPanel\Response\PaymentSystem;

class PaymentSystem
{
    /**
     * @var string
     */
    protected string $subName;

    /**
     * @var string
     */
    protected string $tag;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @return string
     */
    public function getSubName(): string
    {
        return $this->subName;
    }

    /**
     * @param string $subName
     * @return PaymentSystem
     */
    public function setSubName(string $subName): PaymentSystem
    {
        $this->subName = $subName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return PaymentSystem
     */
    public function setTag(string $tag): PaymentSystem
    {
        $this->tag = $tag;

        return $this;
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
     * @return PaymentSystem
     */
    public function setName(string $name): PaymentSystem
    {
        $this->name = $name;

        return $this;
    }
}