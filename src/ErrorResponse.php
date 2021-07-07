<?php


namespace ApiClient;

/**
 * Class ErrorResponse
 * @package ApiClient
 */
class ErrorResponse
{
    /**
     * @var Response
     */
    protected Response $response;

    /**
     * ErrorResponse constructor.
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @return array
     */
    public function getResponseContent(): array
    {
        return $this->response->getResponseContent();
    }

    /**
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }

}
