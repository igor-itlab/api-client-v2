<?php

namespace ApiClient\Tests;

use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\ApiClient;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class Fee
 * @package ApiClient\Tests
 */
class Fee extends ApiClientTest
{
    public function testGetAll()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->fee()->getAll();
        dd($data);
    }

    public function testGetById()
    {
        /**
         * @var ArrayCollection $data
         */
        $data = $this->apiClient->attachedResource(new ControlPanelResource(self::SECRET,
            self::PROJECT_ID))->fee()->getById('72f2f4ce-0c94-11ec-af71-0242ac160008');
        dd($data);
    }
}