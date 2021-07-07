<?php


namespace ApiClient;

/**
 * Class MappedBy
 * @package ApiClient
 * @Annotation
 * @Target({"CLASS"})
 * @Attributes({
 *   @Attribute("value", type = "string"),
 * })
 */
final class MappedBy
{
    public string $value;
}
