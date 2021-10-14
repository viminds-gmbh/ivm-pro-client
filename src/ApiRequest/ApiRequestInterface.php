<?php

namespace Qbus\IvmProClient\ApiRequest;

interface ApiRequestInterface
{
    public function getRequestPath();
    public function getRequestMethod();
}
