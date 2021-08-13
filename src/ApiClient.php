<?php


namespace ApiClient;


use ApiClient\Api\ControlPanel\ControlPanelResource;
use ApiClient\Events\ApiClientEvents;
use ApiClient\Events\BeforeRequestEvent;
use ApiClient\Events\RequestFailedEvent;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Collections\ArrayCollection;
use ReflectionClass;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\ValidatorBuilder;

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
     * @var null|EventDispatcherInterface
     */
    protected ?EventDispatcherInterface $eventDispatcher;

    /**
     * @var ValidatorInterface|null
     */
    private ?ValidatorInterface $validator;

    /**
     * ApiClient constructor.
     */
    public function __construct(EventDispatcherInterface $eventDispatcher = null, ValidatorInterface $validator = null)
    {
        $this->reader = new AnnotationReader();
        $this->eventDispatcher = $eventDispatcher;
        $this->validator = $validator;
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

//        $response = $this->responseMapping($response);
//        if ($this->validator){
//            $errors = $this->validator->validate($response);
//            dd($errors);
//        }

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
