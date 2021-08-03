<?php


namespace ApiClient\Api\ControlPanel;


use ApiClient\Api\ControlPanel\Request\Connection;
use ApiClient\Api\ControlPanel\Request\PaymentSystem;
use ApiClient\Api\ControlPanel\Request\Project;
use ApiClient\Api\ControlPanel\Request\Service;
use ApiClient\Api\ControlPanel\Request\User;
use ApiClient\Api\ControlPanel\Request\Currency;
use ApiClient\ApiResource;

/**
 * Class ControlPanelResource
 * @package ApiClient\Api\ControlPanel
 */
class ControlPanelResource extends ApiResource
{
    /**
     * @return Service
     */
    public function service(): Service
    {
        return new Service($this);
    }

    /**
     * @return User
     */
    public function user(): User
    {
        return new User($this);
    }

    /**
     * @return Project
     */
    public function project(): Project
    {
        return new Project($this);
    }

    /**
     * @return Connection
     */
    public function connection(): Connection
    {
        return new Connection($this);
    }

    /**
     * @return Currency
     */
    public function currency(): Currency
    {
        return new Currency($this);
    }

    /**
     * @return PaymentSystem
     */
    public function paymentSystem(): PaymentSystem
    {
        return new PaymentSystem($this);
    }
}
