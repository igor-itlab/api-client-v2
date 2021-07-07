<?php

namespace ApiClient\Events;

use ApiClient\ErrorResponse;
use ApiClient\RequestBuilder;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class RequestFailedEvent
 * @package ApiClient\Events
 */
class RequestFailedEvent extends Event
{
    /**
     * @var RequestBuilder
     */
    private RequestBuilder $requestBuilder;

    /**
     * @var ErrorResponse
     */
    private ErrorResponse $errorResponse;

    /**
     * RequestFailedEvent constructor.
     * @param RequestBuilder $requestBuilder
     * @param ErrorResponse $errorResponse
     */
    public function __construct(
        RequestBuilder $requestBuilder,
        ErrorResponse $errorResponse
    )
    {
        $this->requestBuilder = $requestBuilder;
        $this->errorResponse = $errorResponse;
    }

    /**
     * @return RequestBuilder
     */
    public function getRequestBuilder(): RequestBuilder
    {
        return $this->requestBuilder;
    }

    /**
     * @return ErrorResponse
     */
    public function getErrorResponse(): ErrorResponse
    {
        return $this->errorResponse;
    }

}