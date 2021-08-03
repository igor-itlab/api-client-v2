<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use PHPUnit\Framework\TestCase;

/**
 * Class Currency
 * @package ApiClient\Tests
 */
class Currency extends TestCase
{
    /**
     * @var object|null
     */
    protected ?object $apiClient;

    /**
     * @param string|null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $test = new ApiClientKernel('test', true);

        $test->boot();
        $container = $test->getContainer();
        $this->apiClient = $container->get('api_client.client');

        $this->assertInstanceOf(ApiClient::class, $this->apiClient);
    }

    public function testGetAll()
    {
        /**
         * @var \ApiClient\Api\ControlPanel\Response\Currency\Currency $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->currency()->getAll();
        dd($data);
    }

    public function testGetByAsset()
    {
        /**
         * @var \ApiClient\Api\ControlPanel\Response\Currency\Currency $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->currency()->getByAsset('UAH')->first();
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            'asset' => 'TEST',
            'type' => 'CURRENCY'
        ];

        /**
         * @var \ApiClient\Api\ControlPanel\Response\Currency\Currency $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->currency()->create($body)->first();
        dd($data);
    }
}