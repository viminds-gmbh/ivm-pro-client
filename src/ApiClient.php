<?php

namespace Qbus\IvmProClient;

use Qbus\IvmProClient\ApiRequest\ApiRequestInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

use function get_object_vars;
use function http_build_query;
use function is_array;
use function serialize;
use function sprintf;
use function urlencode;

class ApiClient
{
    public const BASE_URL = 'https://%s.ivm-professional.de/modules/json/';

    private $httpClient;
    private $subdomain;

    public function __construct(ClientInterface $httpClient, string $subdomain)
    {
        $this->httpClient = $httpClient;
        $this->subdomain = $subdomain;
    }

    public function sendRequest(ApiRequestInterface $apiRequest): ResponseInterface
    {
        $method = $apiRequest->getRequestMethod();
        $url = sprintf(self::BASE_URL, $this->subdomain) . $apiRequest->getRequestPath();

        $properties = get_object_vars($apiRequest);
        $requestData = [];
        foreach ($properties as $property => $value) {
            // Yes, serialize. The API does not accept `foo[]=bar&foo[]=baz`.
            $requestData[$property] = (is_array($value) ? serialize($value) : $value);
        }
        $query = http_build_query($requestData);
        if (!empty($query) && $method === 'GET') {
            $url .= '?' . $query;
        }
        $request = $this->httpClient->createRequest(
            $method,
            $url
        );
        if (!empty($query) && $method === 'POST') {
            $request = $request->withBody($this->httpClient->createStream($query));
        }
        $response = $this->httpClient->sendRequest($request);

        return $response;
    }
}
