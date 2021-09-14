<?php

namespace ApiClient\Api\ControlPanel\Response\Fee;

class DefaultFee
{
    /**
     * @var int
     */
    protected int $id;

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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return DefaultFee
     */
    public function setId(int $id): DefaultFee
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
     * @return DefaultFee
     */
    public function setBaseFee(BaseFee $baseFee): DefaultFee
    {
        $this->baseFee = $baseFee;

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
     * @return DefaultFee
     */
    public function setCreatedAt(int $createdAt): DefaultFee
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