<?php


namespace ApiClient;


use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Collections\ArrayCollection;
use ReflectionException;
use ReflectionMethod;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class Mapper
 * @package ApiClient
 * @method mapped(Response $response);
 */
abstract class Mapper
{
    /**
     * @var ApiResource
     */
    protected ApiResource $apiResource;

    /**
     * @var Serializer
     */
    private Serializer $serializer;

    /**
     * @var AnnotationReader
     */
    private AnnotationReader $reader;

    /**
     * Mapper constructor.
     */
    public function __construct(ApiResource $apiResource)
    {
        $this->apiResource = $apiResource;
        $this->serializer = $this->initSerializer();
        $this->reader = new AnnotationReader();
    }

    /**
     * @return Serializer
     */
    private function initSerializer(): Serializer
    {
        $reflectionExtractor = new ReflectionExtractor();
        $phpDocExtractor = new PhpDocExtractor();
        $propertyTypeExtractor = new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$phpDocExtractor, $reflectionExtractor],
            [$phpDocExtractor],
            [$reflectionExtractor],
            [$reflectionExtractor]
        );

        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [
            new ObjectNormalizer(null, null, null, $propertyTypeExtractor),
            new ArrayDenormalizer()
        ];

        return new Serializer($normalizers, $encoders);
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws ReflectionException
     */
    public function __call($name, $arguments): ArrayCollection
    {
        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 10);
        array_walk(
            $trace,
            static function ($value, $key) use (&$func) {
                if (!isset($value['class'], $value['function'])) {
                    return;
                }
                if (is_subclass_of($value['class'], Request::class)) {
                    $func = $value['function'];
                }
            }
        );

        $result = $this->{$func}($arguments[0]);
        $annotation = $this->reader->getMethodAnnotation(new ReflectionMethod($this, $func), ResponseBy::class);
        if (!$annotation) {
            return new ArrayCollection($result);
        }

        try {
            $denormalized = $this->serializer->denormalize($result, $annotation->value."[]", 'json');
        } catch (ExceptionInterface $e) {
            $result['error'] = $e->getMessage();
            return new ArrayCollection($result);
        }

        return new ArrayCollection($denormalized);
    }
}
