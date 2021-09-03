<?php

namespace ApiClient\Api\ControlPanel\Response\Verification;

class VerificationSchema
{
    /**
     * @var string
     */
    protected string $subName;

    /**
     * @var string
     */
    protected string $tag;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @return string
     */
    public function getSubName(): string
    {
        return $this->subName;
    }

    /**
     * @param string $subName
     * @return VerificationSchema
     */
    public function setSubName(string $subName): VerificationSchema
    {
        $this->subName = $subName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return VerificationSchema
     */
    public function setTag(string $tag): VerificationSchema
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return VerificationSchema
     */
    public function setName(string $name): VerificationSchema
    {
        $this->name = $name;

        return $this;
    }
}