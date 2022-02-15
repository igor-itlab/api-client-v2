<?php

namespace ApiClient\Api\ControlPanel\Response\Fee;

class RangeFee
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var BaseFee
     */
    protected BaseFee $baseFee;

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
    protected float $minAmount;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return RangeFee
     */
    public function setId(string $id): RangeFee
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return BaseFee
     */
    public function getBaseFee(): BaseFee
    {
        return $this->baseFee;
    }

    /**
     * @param BaseFee $baseFee
     * @return RangeFee
     */
    public function setBaseFee(BaseFee $baseFee): RangeFee
    {
        $this->baseFee = $baseFee;

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
    public function getMinAmount(): float
    {
        return $this->minAmount;
    }

    /**
     * @param float $minAmount
     * @return RangeFee
     */
    public function setMinAmount(float $minAmount): RangeFee
    {
        $this->minAmount = $minAmount;

        return $this;
    }

}