<?php

namespace Qbus\IvmProClient\ApiRequest;

class Districts extends AbstractApiRequest
{
    protected $requestPath = 'json_districts.php';
    protected $requestMethod = 'GET';

    public ?string $nutzungsart;
    // TODO: Allow only 1 or null
    public ?int $all;
}
