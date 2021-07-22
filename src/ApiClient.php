<?php


namespace ApiClient;


use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\Events\ApiClientEvents;
use ApiClient\Events\BeforeRequestEvent;
use ApiClient\Events\RequestFailedEvent;
use ApiClient\EventSubscriber\BeforeRequestEventSubscriber;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Collections\ArrayCollection;
use ReflectionClass;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

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
     * @var EventDispatcherInterface
     */
    private EventDispatcherInterface $eventDispatcher;

    /**
     * ApiClient constructor.
     */
    public function __construct()
    {
        $this->reader = new AnnotationReader();
        $this->eventDispatcher = new EventDispatcher();
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
     * @param RequestBuilderInterface $requestBuilder
     * @return Response|ErrorResponse|ArrayCollection
     */
    public function send(RequestBuilderInterface $requestBuilder)
    {
        if ($this->eventDispatcher) {
            $this->eventDispatcher->addSubscriber(new BeforeRequestEventSubscriber());

            $this->eventDispatcher->dispatch(
                new BeforeRequestEvent($requestBuilder),
                ApiClientEvents::BEFORE_REQUEST
            );
        }

        $response = $requestBuilder->send();

        if ($this->checkStatusCode($response->getStatusCode())) {

            $errorResponse = new ErrorResponse($response);

            if ($this->eventDispatcher) {
                $this->eventDispatcher->dispatch(
                    new RequestFailedEvent($requestBuilder, $errorResponse),
                    ApiClientEvents::REQUEST_FAILED
                );
            }

            return $errorResponse;
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
