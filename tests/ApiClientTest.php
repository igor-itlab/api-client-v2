<?php


namespace ApiClient\Tests;


use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\Api\ControlPanel\Request\PrivateAuth;
use ApiClient\ApiClient;
use ApiClient\ApiClientBundle;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Class ApiClientTest
 * @package ApiClient\Tests
 */
class ApiClientTest extends TestCase
{

    public function testApiClientCall()
    {
        $test = new ApiClientKernel('test', true);

        $test->boot();
        $container = $test->getContainer();
        $apiClient = $container->get('api_client.client');

        $this->assertInstanceOf(ApiClient::class, $apiClient);

        $data = $apiClient->attachedResource(new ControlPanelResource())->service()->getAll();
        dd($data);
    }
}

class ApiClientKernel extends Kernel
{

    public function registerBundles(): array
    {
        return [
            new ApiClientBundle()
        ];
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        // TODO: Implement registerContainerConfiguration() method.
    }
}