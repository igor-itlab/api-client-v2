<?php

namespace ApiClient\Api\ControlPanel\Response\Rate;

use ApiClient\Api\ControlPanel\Response\Currency\Currency;
use ApiClient\Api\ControlPanel\Response\Service\Service;

class RateBase
{
    /**
     * @var Currency
     */
    protected Currency $currency;

    /**
     * @var Service
     */
    protected Service $service;

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     * @return RateBase
     */
    public function setCurrency(Currency $currency): self
    {
        $this->currency = $currency;

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
     * @return RateBase
     */
    public function setService(Service $service): self
    {
        $this->service = $service;

        return $this;
    }
}