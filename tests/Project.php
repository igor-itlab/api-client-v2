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
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->project()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var \ApiClient\Api\ControlPanel\Response\Project\Project $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->project()->getById('a71d2167-8057-47ee-a0ff-82e769e6608d')->first();
        dd($data);
    }

    public function testCreate()
    {
        $body = [
            'name' => uniqid('test proj '),
            'user' => 'daeb3f30-ef8a-11eb-b17b-0242ac160008',
        ];

        /**
         * @var \ApiClient\Api\ControlPanel\Response\Project\Project $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->project()->create($body);
        dd($data);
    }
}