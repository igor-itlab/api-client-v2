<?php

namespace ApiClient\Api\ControlPanel\Mapper\Service;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class Service
 * @package ApiClient\Api\ControlPanel\Mapper;
 */
class ServiceRelationship extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Service\ServiceRelationship")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Service\ServiceRelationship")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}