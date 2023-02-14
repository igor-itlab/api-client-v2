<?php

namespace ApiClient\Api\ControlPanel\Response\Transaction;

use ApiClient\Api\ControlPanel\Response\Currency\Currency;
use ApiClient\Api\ControlPanel\Response\PaymentSystem\PaymentSystem;
use ApiClient\Api\ControlPanel\Response\Service\Service;

class TransactionAttribute
{
    /**
     * @var PaymentSystem
     */
    protected PaymentSystem $paymentSystem;

    /**
     * @var Currency
     */
    protected Currency $currency;

    /**
     * @var string
     */
    protected string $transactionType;

    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @var string
     */
    protected string $regex = "";

    /**
     * @var string
     */
    protected string $placeholder = "";

    /**
     * @var Service
     */
    protected Service $service;

    /**
     * @return PaymentSystem
     */
    public function getPaymentSystem(): PaymentSystem
    {
        return $this->paymentSystem;
    }

    /**
     * @param PaymentSystem $paymentSystem
     * @return TransactionAttribute
     */
    public function setPaymentSystem(PaymentSystem $paymentSystem): TransactionAttribute
    {
        $this->paymentSystem = $paymentSystem;

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
     * @return TransactionAttribute
     */
    public function setCurrency(Currency $currency): TransactionAttribute
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionType(): string
    {
        return $this->transactionType;
    }

    /**
     * @param string $transactionType
     * @return TransactionAttribute
     */
    public function setTransactionType(string $transactionType): TransactionAttribute
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return TransactionAttribute
     */
    public function setId(int $id): TransactionAttribute
    {
        $this->id = $id;

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
     * @return TransactionAttribute
     */
    public function setName(string $name): TransactionAttribute
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return TransactionAttribute
     */
    public function setTitle(string $title): TransactionAttribute
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return TransactionAttribute
     */
    public function setType(string $type): TransactionAttribute
    {
        $this->type = $type;

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
     * @return TransactionAttribute
     */
    public function setService(Service $service): TransactionAttribute
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return string
     */
    public function getRegex(): string
    {
        return $this->regex;
    }

    /**
     * @param string $regex
     * @return TransactionAttribute
     */
    public function setRegex(string $regex): TransactionAttribute
    {
        $this->regex = $regex;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    /**
     * @param string $placeholder
     * @return TransactionAttribute
     */
    public function setPlaceholder(string $placeholder): TransactionAttribute
    {
        $this->placeholder = $placeholder;

        return $this;
    }


}