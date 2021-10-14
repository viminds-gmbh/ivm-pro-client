<?php

namespace Qbus\IvmProClient\ApiRequest;

class Send extends AbstractApiRequest
{
    use SearchParametersTrait;
    use ClientMessageTrait;

    protected $requestPath = 'json_send.php';
    protected $requestMethod = 'POST';

    public array $flats;
}
