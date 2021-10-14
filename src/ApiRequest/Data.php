<?php

namespace Qbus\IvmProClient\ApiRequest;

/**
 * The term "data" refers to rooms, streets, floors, and uses
 */
class Data extends AbstractApiRequest
{
    protected $requestPath = 'json_data.php';
    protected $requestMethod = 'POST';

    public ?int $district;
    public ?array $districts;
    public ?string $nutzungsart;
    // TODO: Allow only 1 or null
    public ?int $all;
}
