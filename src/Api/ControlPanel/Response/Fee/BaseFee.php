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
     * @var int
     */
    protected int $percent;

    /**
     * @var int
     */
    protected int $constant;

    /**
     * @var int
     */
    protected int $min;

    /**
     * @var int
     */
    protected int $max;

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
    public function getPercent(): int
    {
        return $this->percent;
    }

    /**
     * @param int $percent
     * @return BaseFee
     */
    public function setPercent(int $percent): BaseFee
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * @return int
     */
    public function getConstant(): int
    {
        return $this->constant;
    }

    /**
     * @param int $constant
     * @return BaseFee
     */
    public function setConstant(int $constant): BaseFee
    {
        $this->constant = $constant;

        return $this;
    }

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @param int $min
     * @return BaseFee
     */
    public function setMin(int $min): BaseFee
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @param int $max
     * @return BaseFee
     */
    public function setMax(int $max): BaseFee
    {
        $this->max = $max;

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

}