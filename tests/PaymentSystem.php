<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class PaymentSystem
 * @package ApiClient\Tests
 */
class PaymentSystem extends TestCase
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
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->paymentSystem()->getAll();
        dd($data);
    }

    public function testGetBySubName()
    {
        /**
         * @var \ApiClient\Api\ControlPanel\Response\PaymentSystem\PaymentSystem $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource())->paymentSystem()->getBySubName('visa')->first();
        dd($data);
    }
}