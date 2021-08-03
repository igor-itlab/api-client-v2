<?php

namespace ApiClient\Api\ControlPanel\Response\User;

class User
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var int
     */
    protected int $createDate;

    /**
     * @var string|null
     */
    protected ?string $firstname;

    /**
     * @var string|null
     */
    protected ?string $lastname;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return User
     */
    public function setId(string $id): User
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setName(string $email): User
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreateDate(): int
    {
        return $this->createDate;
    }

    /**
     * @param int $createDate
     * @return User
     */
    public function setCreateDate(int $createDate): User
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string|null $firstname
     */
    public function setFirstname(?string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param string|null $lastname
     */
    public function setLastname(?string $lastname): void
    {
        $this->lastname = $lastname;
    }
}