<?php


namespace ApiClient\Events;


use ApiClient\RequestBuilder;
use ApiClient\RequestBuilderInterface;
use ApiClient\Response;
use Symfony\Contracts\EventDispatcher\Event;


class AfterRequestEvent extends Event
{
    /**
     * @var bool
     */
    public bool $continue = true;

    /**
     * @var RequestBuilderInterface
     */
    private RequestBuilderInterface $requestBuilder;

    /**
     * @var Response
     */
    private Response $response;

    /**
     * RequestFailedEvent constructor.
     * @param RequestBuilderInterface $requestBuilder
     * @param Response $response
     */
    public function __construct(
        RequestBuilderInterface $requestBuilder,
        Response $response
    )
    {
        $this->requestBuilder = $requestBuilder;
        $this->response = $response;
    }

    /**
     * @return RequestBuilder
     */
    public function getRequestBuilder(): RequestBuilderInterface
    {
        return $this->requestBuilder;
    }

    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }
}
