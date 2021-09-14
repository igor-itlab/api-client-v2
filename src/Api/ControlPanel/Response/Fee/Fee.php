<?php

namespace ApiClient\Api\ControlPanel\Response\Fee;

class Fee
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
    protected float $min;

    /**
     * @var float
     */
    protected float $max;

    /**
     * @var float
     */
    protected float $cleanPercent;

    /**
     * @var float
     */
    protected float $cleanConstant;

    /**
     * @var float
     */
    protected float $cleanMin;

    /**
     * @var float
     */
    protected float $cleanMax;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Fee
     */
    public function setId(string $id): Fee
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
     * @return Fee
     */
    public function setBaseFee(BaseFee $baseFee): Fee
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

    /**
     * @return float
     */
    public function getCleanPercent(): float
    {
        return $this->cleanPercent;
    }

    /**
     * @param float $cleanPercent
     */
    public function setCleanPercent(float $cleanPercent): void
    {
        $this->cleanPercent = $cleanPercent;
    }

    /**
     * @return float
     */
    public function getCleanConstant(): float
    {
        return $this->cleanConstant;
    }

    /**
     * @param float $cleanConstant
     */
    public function setCleanConstant(float $cleanConstant): void
    {
        $this->cleanConstant = $cleanConstant;
    }

    /**
     * @return float
     */
    public function getCleanMin(): float
    {
        return $this->cleanMin;
    }

    /**
     * @param float $cleanMin
     */
    public function setCleanMin(float $cleanMin): void
    {
        $this->cleanMin = $cleanMin;
    }

    /**
     * @return float
     */
    public function getCleanMax(): float
    {
        return $this->cleanMax;
    }

    /**
     * @param float $cleanMax
     */
    public function setCleanMax(float $cleanMax): void
    {
        $this->cleanMax = $cleanMax;
    }

}