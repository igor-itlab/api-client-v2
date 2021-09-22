<?php

namespace ApiClient\Api\ControlPanel\Response\Service;

use ApiClient\Api\ControlPanel\Response\Currency\Currency;
use ApiClient\Api\ControlPanel\Response\PaymentSystem\PaymentSystem;
use ApiClient\Api\ControlPanel\Response\Verification\VerificationSchema;

class ServiceRelationship
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
    protected Currency $currency;

    /**
     * @var VerificationSchema
     */
    protected VerificationSchema $schema;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ServiceRelationship
     */
    public function setId(string $id): ServiceRelationship
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
     * @return ServiceRelationship
     */
    public function setService(Service $service): ServiceRelationship
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
     * @return ServiceRelationship
     */
    public function setPaymentSystem(PaymentSystem $paymentSystem): ServiceRelationship
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
     * @return ServiceRelationship
     */
    public function setCurrency(Currency $currency): ServiceRelationship
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return VerificationSchema
     */
    public function getSchema(): VerificationSchema
    {
        return $this->schema;
    }

    /**
     * @param VerificationSchema $schema
     * @return ServiceRelationship
     */
    public function setSchema(VerificationSchema $schema): ServiceRelationship
    {
        $this->schema = $schema;
        return $this;
    }
}