<?php

namespace Qbus\IvmProClient\ApiRequest;

class Details extends AbstractApiRequest
{
    protected $requestPath = 'json_details.php';
    protected $requestMethod = 'POST';

    public int $flat_id;
    public ?int $language;
}
