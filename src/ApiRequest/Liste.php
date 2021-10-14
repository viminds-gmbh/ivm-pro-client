<?php

namespace Qbus\IvmProClient\ApiRequest;

class Liste extends AbstractApiRequest
{
    protected $requestPath = 'json_liste.php';
    protected $requestMethod = 'POST';

    public ?array $flats;
}
