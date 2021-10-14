<?php

namespace Qbus\IvmProClient\ApiRequest;

abstract class AbstractApiRequest implements ApiRequestInterface
{
    protected $requestPath;
    protected $requestMethod;

    public function getRequestPath()
    {
        return $this->requestPath;
    }

    public function getRequestMethod()
    {
        return $this->requestMethod;
    }
}
