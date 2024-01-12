<?php

namespace ApiClient\Api\ControlPanel\Response\Verification\AmlBot;

use ApiClient\Api\ControlPanel\Response\Connection\Connection;
use ApiClient\Api\ControlPanel\Response\Status\Status;
use ApiClient\Api\ControlPanel\Response\Verification\VerificationSchema;

class AmlBot
{
    /**
     * @var VerificationSchema
     */
    protected VerificationSchema $schema;

    /**
     * @var array
     */
    protected array $flowData;

    /**
     * @var array
     */
    protected array $attributes;

    /**
     * @var string
     */
    protected string $id;

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
     * @var int
     */
    protected int $createdAt;

    /**
     * @var string|null
     */
    protected ?string $processingId;

    /**
     * @return VerificationSchema
     */
    public function getSchema(): VerificationSchema
    {
        return $this->schema;
    }

    /**
     * @param VerificationSchema $schema
     */
    public function setSchema(VerificationSchema $schema): void
    {
        $this->schema = $schema;
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
     */
    public function setFlowData(array $flowData): void
    {
        foreach ($flowData as $data)
        {
            $this->flowData[] = new FlowData($data);
        }
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
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
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
     */
    public function setId(string $id): void
    {
        $this->id = $id;
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
     */
    public function setCallBackUrl(string $callBackUrl): void
    {
        $this->callBackUrl = $callBackUrl;
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
     */
    public function setStatus(Status $status): void
    {
        $this->status = $status;
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

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt(int $createdAt): void
    {
        $this->createdAt = $createdAt;
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
     */
    public function setProcessingId(?string $processingId): void
    {
        $this->processingId = $processingId;
    }
}