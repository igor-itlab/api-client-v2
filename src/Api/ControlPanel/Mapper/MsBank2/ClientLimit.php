<?php

namespace ApiClient\Api\ControlPanel\Mapper\MsBank2;

use ApiClient\Mapper;
use ApiClient\Response;
use ApiClient\ResponseBy;

/**
 * Class ClientLimit
 * @package ApiClient\Api\ControlPanel\Mapper\MsBank2
 */
class ClientLimit extends Mapper
{

    /**
     * @param Response $response
     *
     * @return array
     * @ResponseBy(value="ApiClient\Api\ControlPanel\Response\MsBank2\ClientLimit")
     */
    public function getClientLimit(Response $response): array
    {
        return [$response->getResponseContent()];
    }

}