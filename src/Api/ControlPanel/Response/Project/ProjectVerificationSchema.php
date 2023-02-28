<?php

namespace ApiClient\Api\ControlPanel\Response\Project;

use ApiClient\Api\ControlPanel\Response\Service\ServiceRelationship;
use ApiClient\Api\ControlPanel\Response\Verification\VerificationSchema;

class ProjectVerificationSchema
{

    /**
     * @var string
     */
    protected string $id;

    /**
     * @var Project
     */
    protected Project $project;

    /**
     * @var ServiceRelationship
     */
    protected ServiceRelationship $serviceRelationship;

    /**
     * @var VerificationSchema
     */
    protected VerificationSchema $schema;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ProjectVerificationSchema
     */
    public function setId(string $id): ProjectVerificationSchema
    {
        $this->id = $id;
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
     * @return ProjectVerificationSchema
     */
    public function setProject(Project $project): ProjectVerificationSchema
    {
        $this->project = $project;
        return $this;
    }

    /**
     * @return ServiceRelationship
     */
    public function getServiceRelationship(): ServiceRelationship
    {
        return $this->serviceRelationship;
    }

    /**
     * @param ServiceRelationship $serviceRelationship
     * @return ProjectVerificationSchema
     */
    public function setServiceRelationship(ServiceRelationship $serviceRelationship): ProjectVerificationSchema
    {
        $this->serviceRelationship = $serviceRelationship;
        return $this;
    }


    /**
     * @return VerificationSchema
     */
    public function getSchema(): VerificationSchema
    {
        return $this->schema;
    }

    /**
     * @param VerificationSchema $schema
     * @return ProjectVerificationSchema
     */
    public function setSchema(VerificationSchema $schema): ProjectVerificationSchema
    {
        $this->schema = $schema;
        return $this;
    }

}