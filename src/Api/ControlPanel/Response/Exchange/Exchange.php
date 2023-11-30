<?php

namespace ApiClient\Api\ControlPanel\Response\Exchange;

use ApiClient\Api\ControlPanel\Response\Connection\Connection;
use ApiClient\Api\ControlPanel\Response\Status\Status;

class Exchange
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var float|int
     */
    protected float $inAmount;

    /**
     * @var float|int
     */
    protected float $outAmount;

    /**
     * @var string
     */
    protected string $inCurrency;

    /**
     * @var string
     */
    protected string $outCurrency;

    /**
     * @var string
     */
    protected string $inService;

    /**
     * @var string
     */
    protected string $outService;

    /**
     * @var array | null
     */
    protected ?array $flowData;

    /**
     * @var string|null
     */
    protected ?string $callBackUrl;

    /**
     * @var Status
     */
    protected Status $status;

    /**
     * @var Connection
     */
    protected Connection $connection;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Exchange
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return float
     */
    public function getInAmount(): float
    {
        return $this->inAmount;
    }

    /**
     * @param float $inAmount
     * @return Exchange
     */
    public function setInAmount(float $inAmount): self
    {
        $this->inAmount = $inAmount;

        return $this;
    }

    /**
     * @return float
     */
    public function getOutAmount(): float
    {
        return $this->outAmount;
    }

    /**
     * @param float $outAmount
     * @return Exchange
     */
    public function setOutAmount(float $outAmount): self
    {
        $this->outAmount = $outAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getInCurrency(): string
    {
        return $this->inCurrency;
    }

    /**
     * @param string $inCurrency
     * @return Exchange
     */
    public function setInCurrency(string $inCurrency): self
    {
        $this->inCurrency = $inCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getOutCurrency(): string
    {
        return $this->outCurrency;
    }

    /**
     * @param string $outCurrency
     * @return Exchange
     */
    public function setOutCurrency(string $outCurrency): self
    {
        $this->outCurrency = $outCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getInService(): string
    {
        return $this->inService;
    }

    /**
     * @param string $inService
     * @return Exchange
     */
    public function setInService(string $inService): self
    {
        $this->inService = $inService;

        return $this;
    }

    /**
     * @return string
     */
    public function getOutService(): string
    {
        return $this->outService;
    }

    /**
     * @param string $outService
     * @return Exchange
     */
    public function setOutService(string $outService): self
    {
        $this->outService = $outService;

        return $this;
    }

    /**
     * @return array | null
     */
    public function getFlowData(): ?array
    {
        return $this->flowData ?? null;
    }

    /**
     * @param array $flowData
     */
    public function setFlowData(array $flowData): void
    {
        foreach ($flowData as $data) {
            $this->flowData[] = new FlowData($data);
        }
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
     * @return Exchange
     */
    public function setCallBackUrl(string $callBackUrl): self
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
     * @return Exchange
     */
    public function setStatus(Status $status): self
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
     * @return Exchange
     */
    public function setConnection(Connection $connection): self
    {
        $this->connection = $connection;

        return $this;
    }
}