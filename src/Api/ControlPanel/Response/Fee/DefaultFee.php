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
    public function getPercent(): int
    {
        return $this->percent;
    }

    /**
     * @param int $percent
     * @return DefaultFee
     */
    public function setPercent(int $percent): DefaultFee
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
     * @return DefaultFee
     */
    public function setConstant(int $constant): DefaultFee
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
     * @return DefaultFee
     */
    public function setMin(int $min): DefaultFee
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
     * @return DefaultFee
     */
    public function setMax(int $max): DefaultFee
    {
        $this->max = $max;

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
}