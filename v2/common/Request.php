<?php

class Request
{
    /**
     * @var string
     */
    private $requestHeader;
    private $requestBody;
    private $requstUri;

    public function setRequestHeader(string $requestHeader) :void
    {
        $this->requestHeader = $requestHeader;
    }

    public function setRequestBody(string $requestBody) :void
    {
        $this->requestBody = $requestBody;
    }

    public function getRequestHeader() :?string
    {
        return $this->requestHeader;
    }

    public function getRequestBody() :?string
    {
        return $this->requestBody;
    }

    /**
     * @return mixed
     */
    public function getRequsturi()
    {
        return $this->requstUri;
    }

    /**
     * @param mixed $requsturi
     */
    public function setRequsturi($requstUri): void
    {
        $this->requstUri = $requstUri;
    }
}