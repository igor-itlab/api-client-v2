<?php

namespace ApiClient\Api\ControlPanel\Response\Document;

use ApiClient\Api\ControlPanel\Response\Connection\Connection;
use ApiClient\Api\ControlPanel\Response\Status\Status;
use ApiClient\Api\ControlPanel\Response\Verification\VerificationSchema;

class Document
{
    /**
     * @var VerificationSchema
     */
    protected VerificationSchema $schema;

    /**
     * @var FlowData
     */
    protected FlowData $flowData;

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
     * @var string
     */
    protected string $processingId;

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
     * @return FlowData
     */
    public function getFlowData(): FlowData
    {
        return $this->flowData;
    }

    /**
     * @param FlowData $flowData
     */
    public function setFlowData(FlowData $flowData): void
    {
        $this->flowData = $flowData;
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
     * @return string
     */
    public function getProcessingId(): string
    {
        return $this->processingId;
    }

    /**
     * @param string $processingId
     */
    public function setProcessingId(string $processingId): void
    {
        $this->processingId = $processingId;
    }
}