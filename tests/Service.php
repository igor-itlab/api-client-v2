<?php


namespace ApiClient\Tests;


use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use PHPUnit\Framework\TestCase;

/**
 * Class Service
 * @package ApiClient\Tests
 */
class Service extends TestCase
{
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
         * @var Service $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->service()->getAll()->first();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var Service $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->service()->getById('4d2de4e2-6641-4146-bd62-b1f1a1b475eb')->first();
        dd($data);
    }

    public function testUpdate()
    {
        $body = [
          'enable' => true
        ];

        $data = $this->apiClient->attachedResource(new ControlPanelResource())->service()->update('4d2de4e2-6641-4146-bd62-b1f1a1b475eb', $body);
        dd($data);
    }
}