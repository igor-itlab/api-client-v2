<?php

namespace ApiClient\Api\ControlPanel\Mapper\Fee;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

class Fee extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Fee\Fee")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Fee\Fee")
     */
    public function getById(Response $response): array
    {
        return $response->getResponseContent();
    }
}