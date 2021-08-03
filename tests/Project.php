<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class Project
 * @package ApiClient\Tests
 */
class Project extends TestCase
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
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->project()->getAll(['name' => 'test proj 6108e1fda181c', 'id' => '56469327-64b7-4002-b598-8d5ea39d2a27']);
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var \ApiClient\Api\ControlPanel\Response\Project\Project $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->project()->getById('19b0c556-c4d8-42a1-bfe8-e7fe55032655')->first();
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            'name' => uniqid('test proj '),
            'user' => [
                'id' => 'daeb3f30-ef8a-11eb-b17b-0242ac160008',
            ],
        ];

        /**
         * @var \ApiClient\Api\ControlPanel\Response\Project\Project $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->project()->create($body)->first();
        dd($data);
    }
}