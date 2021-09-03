<?php

namespace ApiClient\Api\ControlPanel\Response\Rate;

use ApiClient\Api\ControlPanel\Response\Currency\Currency;
use ApiClient\Api\ControlPanel\Response\Service\Service;

class Rate
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
     * @var Service
     */
    protected Service $service;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var string
     */
    protected string $selling;

    /**
     * @var string
     */
    protected string $purchase;

    /**
     * @var float
     */
    protected float $cleanSelling;

    /**
     * @var float
     */
    protected float $cleanPurchase;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Rate
     */
    public function setId(string $id): Rate
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
     * @return Rate
     */
    public function setCurrency(Currency $currency): Rate
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
     * @return Rate
     */
    public function setService(Service $service): Rate
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }

    /**
     * @param string $rate
     * @return Rate
     */
    public function setRate(string $rate): Rate
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return string
     */
    public function getSelling(): string
    {
        return $this->selling;
    }

    /**
     *
     * @return float
     */
    public function getCleanSelling(): float
    {
        return $this->cleanSelling;
    }

    /**
     * @param string $selling
     * @return Rate
     */
    public function setSelling(string $selling): Rate
    {
        $this->selling = $selling;

        return $this;
    }

    /**
     * @return string
     */
    public function getPurchase(): string
    {
        return $this->purchase;
    }

    /**
     * @return float
     */
    public function getCleanPurchase(): float
    {
        return $this->cleanPurchase;
    }

    /**
     * @param string $purchase
     * @return Rate
     */
    public function setPurchase(string $purchase): Rate
    {
        $this->purchase = $purchase;

        return $this;
    }

    /**
     * @param float $cleanSelling
     * @return Rate
     */
    public function setCleanSelling(float $cleanSelling): Rate
    {
        $this->cleanSelling = $cleanSelling;

        return $this;
    }

    /**
     * @param float $cleanPurchase
     * @return Rate
     */
    public function setCleanPurchase(float $cleanPurchase): Rate
    {
        $this->cleanPurchase = $cleanPurchase;

        return $this;
    }
}