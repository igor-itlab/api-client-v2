<?php

namespace ApiClient\Api\ControlPanel\Response\Rate;

use ApiClient\Api\ControlPanel\Response\Currency\Currency;

class RateBase
{
    /**
     * @var Currency
     */
    protected Currency $currency;

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     */
    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }
}