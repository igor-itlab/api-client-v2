<?php

namespace ApiClient\Api\ControlPanel\Mapper;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class Service
 * @package ApiClient\Api\ControlPanel\Mapper;
 */
class ProjectVerificationSchema extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Project\ProjectVerificationSchema")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Project\ProjectVerificationSchema")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}