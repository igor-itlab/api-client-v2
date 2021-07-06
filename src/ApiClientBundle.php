<?php


namespace ApiClient;


use ApiClient\DependencyInjection\ApiClientExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class ApiClientBundle
 * @package ApiClient
 */
class ApiClientBundle extends Bundle
{
    /**
     * @return ApiClientExtension|false|ExtensionInterface|null
     */
    public function getContainerExtension()
    {
        if ((null === $this->extension)) {
            $this->extension = new ApiClientExtension();
        }

        return $this->extension;
    }

}
