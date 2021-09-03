<?php

namespace ApiClient\Api\ControlPanel\Response\Transaction;

use ApiClient\Api\ControlPanel\Response\Connection\Connection;
use ApiClient\Api\ControlPanel\Response\Currency\Currency;
use ApiClient\Api\ControlPanel\Response\PaymentSystem\PaymentSystem;
use ApiClient\Api\ControlPanel\Response\Status\Status;

class Transaction
{
    /**
     * @var string
     */
    protected string $returnUrl;

    /**
     * @var array
     */
    protected array $attributes;

    /**
     * @var array
     */
    protected array $flowData;

    /**
     * @var string|null
     */
    protected ?string $processingId;

    /**
     * @var PaymentSystem
     */
    protected PaymentSystem $paymentSystem;

    /**
     * @var string
     */
    protected string $amount;

    /**
     * @var Currency
     */
    protected Currency $currency;

    /**
     * @var string
     */
    protected string $referenceId;

    /**
     * @var string
     */
    protected string $processedAmount;

    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $callBackUrl;

    /**
     * @var Status
     */
    protected Status $status;

    /**
     * @var Connection
     */
    protected Connection $connection;

    /**
     * @var int
     */
    protected int $createdAt;

    /**
     * @return string
     */
    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    /**
     * @param string $returnUrl
     * @return Transaction
     */
    public function setReturnUrl(string $returnUrl): Transaction
    {
        $this->returnUrl = $returnUrl;

        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return Transaction
     */
    public function setAttributes(array $attributes): Transaction
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return array
     */
    public function getFlowData(): array
    {
        return $this->flowData;
    }

    /**
     * @param array $flowData
     * @return Transaction
     */
    public function setFlowData(array $flowData): Transaction
    {
        $this->flowData = $flowData;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProcessingId(): ?string
    {
        return $this->processingId;
    }

    /**
     * @param string|null $processingId
     * @return Transaction
     */
    public function setProcessingId(?string $processingId): Transaction
    {
        $this->processingId = $processingId;

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
     * @return Transaction
     */
    public function setPaymentSystem(PaymentSystem $paymentSystem): Transaction
    {
        $this->paymentSystem = $paymentSystem;

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
     * @return Transaction
     */
    public function setAmount(string $amount): Transaction
    {
        $this->amount = $amount;

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
     * @return Transaction
     */
    public function setCurrency(Currency $currency): Transaction
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getReferenceId(): string
    {
        return $this->referenceId;
    }

    /**
     * @param string $referenceId
     * @return Transaction
     */
    public function setReferenceId(string $referenceId): Transaction
    {
        $this->referenceId = $referenceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getProcessedAmount(): string
    {
        return $this->processedAmount;
    }

    /**
     * @param string $processedAmount
     * @return Transaction
     */
    public function setProcessedAmount(string $processedAmount): Transaction
    {
        $this->processedAmount = $processedAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Transaction
     */
    public function setId(string $id): Transaction
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getCallBackUrl(): string
    {
        return $this->callBackUrl;
    }

    /**
     * @param string $callBackUrl
     * @return Transaction
     */
    public function setCallBackUrl(string $callBackUrl): Transaction
    {
        $this->callBackUrl = $callBackUrl;

        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @param Status $status
     * @return Transaction
     */
    public function setStatus(Status $status): Transaction
    {
        $this->status = $status;

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
     * @return Transaction
     */
    public function setConnection(Connection $connection): Transaction
    {
        $this->connection = $connection;

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
     * @return Transaction
     */
    public function setCreatedAt(int $createdAt): Transaction
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}