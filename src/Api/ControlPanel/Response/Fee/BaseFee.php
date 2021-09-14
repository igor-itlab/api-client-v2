<?php

namespace ApiClient\Api\ControlPanel\Response\Fee;

use ApiClient\Api\ControlPanel\Response\Currency\Currency;
use ApiClient\Api\ControlPanel\Response\PaymentSystem\PaymentSystem;
use ApiClient\Api\ControlPanel\Response\Service\Service;

class BaseFee
{
    /**
     * @var string
     */
    protected string $id;


    /**
     * @var Service
     */
    protected Service $service;

    /**
     * @var PaymentSystem
     */
    protected PaymentSystem $paymentSystem;

    /**
     * @var Currency
     */
    protected Currency $project;

    /**
     * @var float
     */
    protected float $percent;

    /**
     * @var float
     */
    protected float $constant;

    /**
     * @var float
     */
    protected float $min;

    /**
     * @var float
     */
    protected float $max;

    /**
     * @var int
     */
    protected int $createdAt;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return BaseFee
     */
    public function setId(string $id): BaseFee
    {
        $this->id = $id;

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
     * @return BaseFee
     */
    public function setService(Service $service): BaseFee
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return PaymentSystem
     */
    public function getPaymentSystem(): PaymentSystem
    {
        return $this->paymentSystem;
    }

    /**
     * @param PaymentSystem $paymentSystem
     * @return BaseFee
     */
    public function setPaymentSystem(PaymentSystem $paymentSystem): BaseFee
    {
        $this->paymentSystem = $paymentSystem;

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
     * @return BaseFee
     */
    public function setProject(Currency $project): BaseFee
    {
        $this->project = $project;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     * @return BaseFee
     */
    public function setCreatedAt(int $createdAt): BaseFee
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return float
     */
    public function getPercent(): float
    {
        return $this->percent;
    }

    /**
     * @param float $percent
     */
    public function setPercent(float $percent): void
    {
        $this->percent = $percent;
    }

    /**
     * @return float
     */
    public function getConstant(): float
    {
        return $this->constant;
    }

    /**
     * @param float $constant
     */
    public function setConstant(float $constant): void
    {
        $this->constant = $constant;
    }

    /**
     * @return float
     */
    public function getMin(): float
    {
        return $this->min;
    }

    /**
     * @param float $min
     */
    public function setMin(float $min): void
    {
        $this->min = $min;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return $this->max;
    }

    /**
     * @param float $max
     */
    public function setMax(float $max): void
    {
        $this->max = $max;
    }

}