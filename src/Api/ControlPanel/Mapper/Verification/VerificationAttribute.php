<?php

namespace ApiClient\Api\ControlPanel\Mapper\Verification;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class VerificationAttribute
 * @package ApiClient\Api\ControlPanel\Mapper\Verification;
 */
class VerificationAttribute extends Mapper
{
    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Verification\VerificationAttribute")
     */
    public function getAll(Response $response): array
    {
        return $response->getResponseContent();
    }

    /**
     * @param Response $response
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\Verification\VerificationAttribute")
     */
    public function getById(Response $response): array
    {
        return [$response->getResponseContent()];
    }
}