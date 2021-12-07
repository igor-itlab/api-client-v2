<?php

namespace ApiClient\Api\ControlPanel\Response\Rate;

use ApiClient\Api\ControlPanel\Response\Connection\Connection;
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
     * @var Connection
     */
    protected Connection $connection;

    /**
     * @var string
     */
    protected string $rateSelling;

    /**
     * @var string
     */
    protected string $ratePurchase;

    /**
     * @var float
     */
    protected float $selling;

    /**
     * @var float
     */
    protected float $purchase;

    /**
     * @var string
     */
    protected string $cleanSelling;

    /**
     * @var string
     */
    protected string $cleanPurchase;

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
     * @return string
     */
    public function getRateSelling(): string
    {
        return $this->rateSelling;
    }

    /**
     * @param string $rateSelling
     * @return Rate
     */
    public function setRateSelling(string $rateSelling): Rate
    {
        $this->rateSelling = $rateSelling;

        return $this;
    }

    /**
     * @return string
     */
    public function getRatePurchase(): string
    {
        return $this->ratePurchase;
    }

    /**
     * @param string $ratePurchase
     */
    public function setRatePurchase(string $ratePurchase): void
    {
        $this->ratePurchase = $ratePurchase;
    }

    /**
     * @return float
     */
    public function getSelling(): float
    {
        return $this->selling;
    }

    /**
     *
     * @return string
     */
    public function getCleanSelling(): string
    {
        return $this->cleanSelling;
    }

    /**
     * @param float $selling
     * @return Rate
     */
    public function setSelling(float $selling): Rate
    {
        $this->selling = $selling;

        return $this;
    }

    /**
     * @return float
     */
    public function getPurchase(): float
    {
        return $this->purchase;
    }

    /**
     * @return string
     */
    public function getCleanPurchase(): string
    {
        return $this->cleanPurchase;
    }

    /**
     * @param float $purchase
     * @return Rate
     */
    public function setPurchase(float $purchase): Rate
    {
        $this->purchase = $purchase;

        return $this;
    }

    /**
     * @param string $cleanSelling
     * @return Rate
     */
    public function setCleanSelling(string $cleanSelling): Rate
    {
        $this->cleanSelling = $cleanSelling;

        return $this;
    }

    /**
     * @param string $cleanPurchase
     * @return Rate
     */
    public function setCleanPurchase(string $cleanPurchase): Rate
    {
        $this->cleanPurchase = $cleanPurchase;

        return $this;
    }

    /**
     * @return Connection
     */
    public function getConnection(): Connection
    {
        return $this->connection;
    }

    /**
     * @param Connection $connection
     */
    public function setConnection(Connection $connection): void
    {
        $this->connection = $connection;
    }
}