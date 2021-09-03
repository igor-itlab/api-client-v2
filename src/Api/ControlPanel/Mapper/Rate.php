<?php

namespace ApiClient\Api\ControlPanel\Mapper;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

class Rate extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Rate\Rate")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Rate\Rate")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}