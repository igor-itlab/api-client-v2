<?php

namespace ApiClient\Events;

use ApiClient\ErrorResponse;
use ApiClient\RequestBuilder;
use ApiClient\RequestBuilderInterface;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class RequestFailedEvent
 * @package ApiClient\Events
 */
class RequestFailedEvent extends Event
{
    /**
     * @var RequestBuilderInterface
     */
    private RequestBuilderInterface $requestBuilder;

    /**
     * @var ErrorResponse
     */
    private ErrorResponse $errorResponse;

    /**
     * RequestFailedEvent constructor.
     * @param RequestBuilderInterface $requestBuilder
     * @param ErrorResponse $errorResponse
     */
    public function __construct(
        RequestBuilderInterface $requestBuilder,
        ErrorResponse $errorResponse
    )
    {
        $this->requestBuilder = $requestBuilder;
        $this->errorResponse = $errorResponse;
    }

    /**
     * @return RequestBuilder
     */
    public function getRequestBuilder(): RequestBuilderInterface
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