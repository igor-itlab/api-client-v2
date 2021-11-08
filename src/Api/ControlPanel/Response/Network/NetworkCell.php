<?php

namespace ApiClient\Api\ControlPanel\Response\Network;


class NetworkCell
{
    /**
     * @var Network
     */
    protected Network $network;

    /**
     * @var array
     */
    protected array $cities;

    /**
     * @return Network
     */
    public function getNetwork(): Network
    {
        return $this->network;
    }

    /**
     * @param Network $network
     */
    public function setNetwork(Network $network): void
    {
        $this->network = $network;
    }

    /**
     * @return array
     */
    public function getCities(): array
    {
        return $this->cities;
    }

    /**
     * @param array $cities
     */
    public function setCities(array $cities): void
    {
        $this->cities = $cities;
    }
}