<?php

namespace ApiClient\Api\ControlPanel\Response\MsBank2;

class ClientLimit
{

    /**
     * @var string
     */
    protected string $status;

    /**
     * @var string|null
     */
    protected ?string $message;

    /**
     * @var string|null
     */
    protected ?string $remainingLimit;

    /**
     * @var string|null
     */
    protected ?string $responseData;
    
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     *
     * @return $this
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRemainingLimit(): ?string
    {
        return $this->remainingLimit;
    }

    /**
     * @param string|null $remainingLimit
     *
     * @return $this
     */
    public function setRemainingLimit(?string $remainingLimit): self
    {
        $this->remainingLimit = $remainingLimit;
        
        return $this;
    }

    /**
     * @return string|null
     */
    public function getResponseData(): ?string
    {
        return $this->responseData;
    }

    /**
     * @param string|null $responseData
     *
     * @return $this
     */
    public function setResponseData(?string $responseData): self
    {
        $this->responseData = $responseData;
        
        return $this;
    }

}