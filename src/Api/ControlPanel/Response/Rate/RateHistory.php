<?php

namespace ApiClient\Api\ControlPanel\Response\Rate;


class RateHistory
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var float
     */
    protected float $rate;

    /**
     * @var int
     */
    protected int $createAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return RateHistory
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return RateHistory
     */
    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreateAt(): int
    {
        return $this->createAt;
    }

    /**
     * @param int $createAt
     * @return RateHistory
     */
    public function setCreateAt(int $createAt): self
    {
        $this->createAt = $createAt;

        return $this;
    }
}