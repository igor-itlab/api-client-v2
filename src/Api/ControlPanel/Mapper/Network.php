<?php

namespace ApiClient\Api\ControlPanel\Mapper;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class Network
 * @package ApiClient\Api\ControlPanel\Mapper;
 */
class Network extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Network\NetworkCell")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent()['data'];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Network\NetworkCell")
     */
    public function getAllForAriana(Response $response): array
    {
        return $response->getResponseContent()['data'];
    }

}