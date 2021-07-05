<?php


namespace ApiClient;


use ApiClient\DependencyInjection\ApiClientExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApiClientBundle extends Bundle
{
    public function getContainerExtension()
    {
        if ((null === $this->extension)) {
            $this->extension = new ApiClientExtension();
        }

        return $this->extension;
    }

}
