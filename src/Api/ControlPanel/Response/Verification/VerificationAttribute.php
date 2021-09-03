<?php

namespace ApiClient\Api\ControlPanel\Response\Verification;

use ApiClient\Api\ControlPanel\Response\Service\Service;

class VerificationAttribute
{
    /**
     * @var string
     */
    protected string $verificationType;

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
    protected string $type;

    /**
     * @var Service
     */
    protected Service $service;

    /**
     * @return string
     */
    public function getVerificationType(): string
    {
        return $this->verificationType;
    }

    /**
     * @param string $verificationType
     * @return VerificationAttribute
     */
    public function setVerificationType(string $verificationType): VerificationAttribute
    {
        $this->verificationType = $verificationType;

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
     * @return VerificationAttribute
     */
    public function setId(int $id): VerificationAttribute
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
     * @return VerificationAttribute
     */
    public function setName(string $name): VerificationAttribute
    {
        $this->name = $name;

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
     * @return VerificationAttribute
     */
    public function setType(string $type): VerificationAttribute
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
     * @return VerificationAttribute
     */
    public function setService(Service $service): VerificationAttribute
    {
        $this->service = $service;

        return $this;
    }
}