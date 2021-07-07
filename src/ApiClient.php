<?php


namespace ApiClient;


use ApiClient\Api\ControlPanel\ControlPanelResource;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Collections\ArrayCollection;
use ReflectionClass;

/**
 * Class ApiClient
 * @package ApiClient
 */
class ApiClient
{
    /**
     * @var ApiResource
     */
    protected ApiResource $resource;

    /**
     * @var AnnotationReader
     */
    protected AnnotationReader $reader;

    /**
     * ApiClient constructor.
     */
    public function __construct()
    {
        $this->reader = new AnnotationReader();
    }


    /**
     * @param ApiResource $apiResource
     * @return ApiResource|ControlPanelResource
     */
    public function attachedResource(ApiResource $apiResource): ApiResource
    {
        $this->resource = $apiResource;
        $apiResource->setApiClient($this);

        return $this->resource;
    }

    /**
     * @param RequestBuilder $requestBuilder
     * @return Response|ErrorResponse|ArrayCollection
     */
    public function send(RequestBuilder $requestBuilder)
    {
//        TODO PRE REQUEST EVENT;
        $response = $requestBuilder->build()->send();

        if ($this->checkStatusCode($response->getStatusCode())) {
//            TODO ON ERROR EVENT
            return new ErrorResponse($response);
        }
//        TODO ON MAPPING RESPONSE EVENT;
        return $this->responseMapping($response);
    }

    /**
     * @param Response $response
     * @return Response|ArrayCollection
     */
    private function responseMapping(Response $response)
    {
        $annotation = $this->reader->getClassAnnotation(
            new ReflectionClass($this->resource->getCurrentRequest()),
            MappedBy::class
        );
        if (!$annotation) {
            return $response;
        }
        /**
         * @var Mapper $mapperInstance
         */
        $mapperInstance = new $annotation->value($this->resource);

        return $mapperInstance->mapped($response);
    }

    /**
     * @param $code
     * @return bool
     */
    protected function checkStatusCode($code): bool
    {
        return (300 <= $code);
    }
}
