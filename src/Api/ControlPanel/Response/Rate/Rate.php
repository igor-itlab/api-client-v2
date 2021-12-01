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