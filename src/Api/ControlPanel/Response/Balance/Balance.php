<?php

namespace ApiClient\Api\ControlPanel\Response\Balance;

use ApiClient\Api\ControlPanel\Response\Currency\Currency;
use ApiClient\Api\ControlPanel\Response\Service\Service;

class Balance
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var Currency
     */
    protected Currency $currency;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var Service
     */
    protected Service $service;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Balance
     */
    public function setId(string $id): Balance
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     * @return Balance
     */
    public function setCurrency(Currency $currency): Balance
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Balance
     */
    public function setAmount(float $amount): Balance
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return Service
     */
    public function getService(): Service
    {
        return $this->service;
    }

    /**
     * @param Service $service
     * @return Balance
     */
    public function setService(Service $service): Balance
    {
        $this->service = $service;

        return $this;
    }
}