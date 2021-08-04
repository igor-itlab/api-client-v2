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
     * @var int
     */
    protected int $percent;

    /**
     * @var int
     */
    protected int $constant;

    /**
     * @var int
     */
    protected int $min;

    /**
     * @var int
     */
    protected int $max;

    /**
     * @var int
     */
    protected int $cleanPercent;

    /**
     * @var int
     */
    protected int $cleanConstant;

    /**
     * @var int
     */
    protected int $cleanMin;

    /**
     * @var int
     */
    protected int $cleanMax;

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
     * @return int
     */
    public function getPercent(): int
    {
        return $this->percent;
    }

    /**
     * @param int $percent
     * @return Fee
     */
    public function setPercent(int $percent): Fee
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * @return int
     */
    public function getConstant(): int
    {
        return $this->constant;
    }

    /**
     * @param int $constant
     * @return Fee
     */
    public function setConstant(int $constant): Fee
    {
        $this->constant = $constant;

        return $this;
    }

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @param int $min
     * @return Fee
     */
    public function setMin(int $min): Fee
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @param int $max
     * @return Fee
     */
    public function setMax(int $max): Fee
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return int
     */
    public function getCleanPercent(): int
    {
        return $this->cleanPercent;
    }

    /**
     * @return int
     */
    public function getCleanConstant(): int
    {
        return $this->cleanConstant;
    }

    /**
     * @return int
     */
    public function getCleanMin(): int
    {
        return $this->cleanMin;
    }

    /**
     * @return int
     */
    public function getCleanMax(): int
    {
        return $this->cleanMax;
    }

    /**
     * @param int $cleanPercent
     * @return Fee
     */
    public function setCleanPercent(int $cleanPercent): Fee
    {
        $this->cleanPercent = $cleanPercent;

        return $this;
    }

    /**
     * @param int $cleanConstant
     * @return Fee
     */
    public function setCleanConstant(int $cleanConstant): Fee
    {
        $this->cleanConstant = $cleanConstant;

        return $this;
    }

    /**
     * @param int $cleanMin
     * @return Fee
     */
    public function setCleanMin(int $cleanMin): Fee
    {
        $this->cleanMin = $cleanMin;

        return $this;
    }

    /**
     * @param int $cleanMax
     * @return Fee
     */
    public function setCleanMax(int $cleanMax): Fee
    {
        $this->cleanMax = $cleanMax;

        return $this;
    }
}