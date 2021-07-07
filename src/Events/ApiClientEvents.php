<?php


namespace ApiClient\Events;


/**
 * Class ApiClientEvents
 * @package ApiClient\Events
 */
class ApiClientEvents
{
    /**
     * @Event("ApiClient\Events\RequestFailedEvent")
     */
    public const REQUEST_FAILED = 'api_client.request_failed';

}