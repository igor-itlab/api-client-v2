<?php

namespace ApiClient\Events;

use ApiClient\RequestBuilder;
use ApiClient\RequestBuilderInterface;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class BeforeRequestEvent
 * @package ApiClient\Events
 */
class BeforeRequestEvent extends Event
{
    /**
     * @var RequestBuilderInterface
     */
    private RequestBuilderInterface $requestBuilder;

    /**
     * BeforeRequestEvent constructor.
     * @param RequestBuilderInterface $requestBuilder
     */
    public function __construct(
        RequestBuilderInterface $requestBuilder)
    {
        $this->requestBuilder = $requestBuilder;
    }

    /**
     * @return RequestBuilder
     */
    public function getRequestBuilder(): RequestBuilderInterface
    {
        return $this->requestBuilder;
    }

}