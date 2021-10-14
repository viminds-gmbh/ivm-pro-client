<?php

namespace Qbus\IvmProClient\ApiRequest;

class Help extends AbstractApiRequest
{
    use SearchParametersTrait;
    use ClientMessageTrait;

    protected $requestPath = 'json_help.php';
    protected $requestMethod = 'POST';

    public string $client_note_text;
    public string $flat_note;
}
