<?php

namespace ApiClient\Api\ControlPanel\Mapper;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class RateHistory
 * @package ApiClient\Api\ControlPanel\Mapper;
 */
class RateHistory extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Rate\RateHistory")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Rate\RateHistory")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}