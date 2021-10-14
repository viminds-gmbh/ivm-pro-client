<?php

namespace Qbus\IvmProClient\ApiRequest;

class Search extends AbstractApiRequest
{
    // TODO: Validation

    use SearchParametersTrait;

    protected $requestPath = 'json_search.php';
    protected $requestMethod = 'POST';
}
