<?php


namespace ApiClient\Api\ControlPanel\Response\Service;


class Service
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var string
     */
    protected string $tag;

    /**
     * @var bool
     */
    protected bool $enable;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Service
     */
    public function setId(string $id): Service
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
     * @return Service
     */
    public function setName(string $name): Service
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Service
     */
    public function setTitle(string $title): Service
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return Service
     */
    public function setTag(string $tag): Service
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEnable(): bool
    {
        return $this->enable;
    }

    /**
     * @param bool $enable
     * @return Service
     */
    public function setEnable(bool $enable): Service
    {
        $this->enable = $enable;

        return $this;
    }
}
