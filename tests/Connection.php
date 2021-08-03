<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class Connection
 * @package ApiClient\Tests
 */
class Connection extends TestCase
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
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->connection()->getAll(['service.id' => '9836ad6c-084a-4eb7-9f34-4f0edf0bf880']);
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var \ApiClient\Api\ControlPanel\Response\Connection\Connection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->connection()->getById('792b88fd-ee94-41d8-8510-0fc8469be325')->first();
        dd($data);
    }

    public function testUpdate()
    {
        $body = [
            'enable' => false,
        ];

        /**
         * @var \ApiClient\Api\ControlPanel\Response\Connection\Connection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->connection()->update('792b88fd-ee94-41d8-8510-0fc8469be325',
            $body)->first();
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            'service' => '4d2de4e2-6641-4146-bd62-b1f1a1b475eb',
            'project' => '19b0c556-c4d8-42a1-bfe8-e7fe55032655',
            "connectionFields" => [
                "string",
            ],
        ];

        /**
         * @var \ApiClient\Api\ControlPanel\Response\Connection\Connection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->connection()->create($body)->first();
        dd($data);
    }
}