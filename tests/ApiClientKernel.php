<?php

namespace ApiClient\Tests;

use ApiClient\ApiClientBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

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