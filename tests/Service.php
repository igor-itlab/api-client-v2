<?php


namespace ApiClient\Tests;


use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\ValidatorBuilder;

/**
 * Class Service
 * @package ApiClient\Tests
 */
class Service extends TestCase
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
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->service()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var \ApiClient\Api\ControlPanel\Response\Service\Service $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->service()->getById('9836ad6c-084a-4eb7-9f34-4f0edf0bf880')->first();
        dd($data);
    }
}