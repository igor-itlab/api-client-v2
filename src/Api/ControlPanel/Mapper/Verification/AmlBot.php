<?php

namespace ApiClient\Api\ControlPanel\Mapper\Verification;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class AmlBot
 * @package ApiClient\Api\ControlPanel\Mapper;
 */
class AmlBot extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Verification\AmlBot\AmlBot")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Verification\AmlBot\AmlBot")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Verification\AmlBot\AmlBot")
     */
    public function create(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}