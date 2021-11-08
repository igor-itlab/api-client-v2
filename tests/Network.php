<?php


namespace ApiClient\Tests;


use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class Service
 * @package ApiClient\Tests
 */
class Network extends ApiClientTest
{
    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->network()->getAll();
        dd($data);
    }
}