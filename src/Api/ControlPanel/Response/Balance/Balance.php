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
    protected Currency $project;

    /**
     * @var string
     */
    protected string $amount;

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
    public function getProject(): Currency
    {
        return $this->project;
    }

    /**
     * @param Currency $project
     * @return Balance
     */
    public function setProject(Currency $project): Balance
    {
        $this->project = $project;

        return $this;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     * @return Balance
     */
    public function setAmount(string $amount): Balance
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