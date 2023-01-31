<?php

namespace ApiClient\Api\ControlPanel\Response\Network;


class Network
{
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
    protected string $token;

    /**
     * @var string
     */
    protected string $type;

    /**
     * @var array
     */
    protected array $currencies;

    /**
     * @var array
     */
    protected array $attributes;

    /**
     * @var array
     */
    protected array $country;

    /**
     * @var bool
     */
    protected bool $active;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
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
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getCurrencies(): array
    {
        return $this->currencies;
    }

    /**
     * @param array $currencies
     */
    public function setCurrencies(array $currencies): void
    {
        $this->currencies = $currencies;
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
     * @return array
     */
    public function getCountry(): array
    {
        return $this->country;
    }

    /**
     * @param array $country
     */
    public function setCountry(array $country): void
    {
        $this->country = $country;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }
}
