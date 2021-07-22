<?php


namespace ApiClient;


use ApiClient\Services\Method;

/**
 * Class RequestBuilder
 * @package ApiClient
 */
abstract class RequestBuilder implements RequestBuilderInterface
{
    /**
     * @var ApiResource
     */
    protected ApiResource $resource;

    /**
     * @var mixed
     */
    protected $requestClient;

    /**
     * @var array
     */
    protected array $headers = [];

    /**
     * @var array
     */
    protected array $body = [];

    /**
     * @var array
     */
    protected array $queryParams = [];

    /**
     * @var string
     */
    protected string $url;

    /**
     * @var Method
     */
    protected Method $method;

    /**
     * @var string
     */
    protected string $domain;

    /**
     * @var string
     */
    protected string $path;

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     * @return RequestBuilder
     */
    public function setHeaders(array $headers): RequestBuilder
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param array $body
     * @return RequestBuilder
     */
    public function setBody(array $body): RequestBuilder
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function addToBody($key, $value): RequestBuilder
    {
        $this->body[$key] = $value;

        return $this;
    }

    /**
     * @param $key
     * @return $this
     */
    public function removeFromBody($key): RequestBuilder
    {
        unset($this->body[$key]);

        return $this;
    }

    /**
     * @param array $bodies
     * @return $this
     */
    public function mergeBodies(array $bodies): RequestBuilder
    {
        $this->body = array_merge($this->body, $bodies);

        return $this;
    }

    /**
     * @return array
     */
    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    /**
     * @param array $queryParams
     * @return RequestBuilder
     */
    public function setQueryParams(array $queryParams): RequestBuilder
    {
        $this->queryParams = $queryParams;

        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function addHeader($key, $value): RequestBuilder
    {
        $this->headers[$key] = $value;

        return $this;
    }

    /**
     * @param array $headers
     * @return $this
     */
    public function mergeHeaders(array $headers): RequestBuilder
    {
        $this->headers = array_merge($this->headers, $headers);

        return $this;
    }

    /**
     * @param $key
     * @return $this
     */
    public function removeHeader($key): RequestBuilder
    {
        unset($this->headers[$key]);

        return $this;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function addQueryParam($key, $value): RequestBuilder
    {
        $this->queryParams[$key] = $value;

        return $this;
    }

    /**
     * @param array $queryParams
     * @return $this
     */
    public function mergeQueryParam(array $queryParams): RequestBuilder
    {
        $this->queryParams = array_merge($this->queryParams, $queryParams);

        return $this;
    }

    /**
     * @param $key
     * @return $this
     */
    public function removeQueryParam($key): RequestBuilder
    {
        unset($this->queryParams[$key]);

        return $this;
    }

    /**
     * @return Method
     */
    public function getMethod(): Method
    {
        return $this->method;
    }

    /**
     * @param Method $method
     * @return RequestBuilder
     */
    public function setMethod(Method $method): RequestBuilder
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return RequestBuilder
     */
    public function setUrl(string $url): RequestBuilder
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param bool $slashLink
     * @return string
     */
    public function getDomain(bool $slashLink = false): string
    {
        return $slashLink ? $this->domain . "/" : $this->domain;
    }

    /**
     * @param string $domain
     * @return RequestBuilder
     */
    public function setDomain(string $domain): RequestBuilder
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @param bool $slashLink
     * @return string
     */
    public function getPath(bool $slashLink = false): string
    {
        return $slashLink ? "/" . $this->path : $this->path;
    }

    /**
     * @param string $path
     * @return RequestBuilder
     */
    public function setPath(string $path): RequestBuilder
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @param mixed $requestClient
     * @return $this
     */
    public function setRequestClient($requestClient): RequestBuilder
    {
        $this->requestClient = $requestClient;

        return $this;
    }

    /**
     * @return ApiResource
     */
    public function getResource(): ApiResource
    {
        return $this->resource;
    }

    /**
     * @param ApiResource $resource
     * @return RequestBuilder
     */
    public function setResource(ApiResource $resource): RequestBuilder
    {
        $this->resource = $resource;

        return $this;
    }

    protected function prepareRequest(): void
    {
        if ($this->queryParams) {
            $this->url = $this->domain . "/" . $this->path . "?" . http_build_query($this->queryParams);

        } else {
            $this->url = $this->domain . "/" . $this->path . http_build_query($this->queryParams);
        }
    }

    /**
     * @return Response
     */
    abstract public function send(): Response;

}
