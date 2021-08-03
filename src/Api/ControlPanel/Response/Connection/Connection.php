<?php

namespace ApiClient\Api\ControlPanel\Response\Connection;

use ApiClient\Api\ControlPanel\Response\Project\Project;
use ApiClient\Api\ControlPanel\Response\Service\Service;

class Connection
{
    /**
     * @var string
     */
    protected string $id;

    /**
     * @var int
     */
    protected int $createDate;

    /**
     * @var Service
     */
    protected Service $service;

    /**
     * @var Project
     */
    protected Project $project;

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
     * @return Connection
     */
    public function setId(string $id): Connection
    {
        $this->id = $id;

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
     * @return Connection
     */
    public function setCreateDate(int $createDate): Connection
    {
        $this->createDate = $createDate;

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
     * @return Connection
     */
    public function setService(Service $service): Connection
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return Project
     */
    public function getProject(): Project
    {
        return $this->project;
    }

    /**
     * @param Project $project
     * @return Connection
     */
    public function setProject(Project $project): Connection
    {
        $this->project = $project;

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
     * @return Connection
     */
    public function setEnable(bool $enable): Connection
    {
        $this->enable = $enable;

        return $this;
    }

}