<?php


namespace ApiClient;


class Response
{
    /**
     * @var int
     */
    protected int $statusCode;

    /**
     * @var array
     */
    protected array $responseContent;

    /**
     * @var ApiResource
     */
    protected ApiResource $apiResource;

    /**
     * Response constructor.
     * @param int $statusCode
     * @param array $responseContent
     * @param ApiResource $apiResource
     */
    public function __construct(int $statusCode, array $responseContent, ApiResource $apiResource)
    {
        $this->statusCode = $statusCode;
        $this->responseContent = $responseContent;
        $this->apiResource = $apiResource;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return Response
     */
    public function setStatusCode(int $statusCode): Response
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @return array
     */
    public function getResponseContent(): array
    {
        return $this->responseContent;
    }

    /**
     * @param array $responseContent
     * @return Response
     */
    public function setResponseContent(array $responseContent): Response
    {
        $this->responseContent = $responseContent;

        return $this;
    }
}
