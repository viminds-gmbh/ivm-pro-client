<?php

namespace Qbus\IvmProClient\Repository;

use Qbus\IvmProClient\ApiClient;
use Qbus\IvmProClient\ApiRequest\Details as DetailsRequest;
use Qbus\IvmProClient\ApiRequest\Search as SearchRequest;
use Qbus\IvmProClient\Model\Unit;

use function array_filter;
use function ctype_digit;
use function is_array;
use function is_int;
use function json_decode;

class UnitRepository
{
    private $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    public function findById(int $id): ?Unit
    {
        $details = new DetailsRequest();
        $details->flat_id = $id;
        $response = $this->client->sendRequest($details);

        if ($response->getStatusCode() !== 200) {
            return null;
        }

        return $this->createModelFromJson($response->getBody()->getContents());
    }

    // TODO: This uses Liste
    //public function findByIds(array $ids): ?array
    //{
    //}

    public function findBySearchCriteria(array $criteria): ?array
    {
        return $this->findBy($criteria);
    }

    public function findAll(): ?array
    {
        return $this->findBy(null);
    }

    protected function findBy(?array $criteria): ?array
    {
        $search = new SearchRequest();
        if ($criteria !== null) {
            foreach ($criteria as $key => $value) {
                $search->$key = $value;
            }
        }
        $response = $this->client->sendRequest($search);

        if ($response->getStatusCode() !== 200) {
            return null;
        }

        return $this->createCollectionFromJson($response->getBody()->getContents());
    }

    protected function createModelFromJson($json): ?Unit
    {
        $unitData = json_decode($json, true);

        if (!is_array($unitData)) {
            return null;
        }

        return $this->createModelFromArray($unitData);
    }

    protected function createModelFromArray(array $unitData): ?Unit
    {
        // API response contains duplicate data for some reason: Every value
        // exists once with a numeric key, once with a string key.
        $unitDataAssocOnly = array_filter(
            $unitData,
            function ($v, $k) {
                return !is_int($k) && !ctype_digit($k);
            },
            ARRAY_FILTER_USE_BOTH
        );

        return new Unit($unitDataAssocOnly);
    }

    protected function createCollectionFromJson($json): ?array
    {
        $unitDataList = json_decode($json, true);

        if (!is_array($unitDataList) || empty($unitDataList['flats'])) {
            return null;
        }

        $unitCollection = [];
        foreach ($unitDataList['flats'] as $unitData) {
            $unit = $this->createModelFromArray($unitData);

            if ($unit === null) {
                continue;
            }

            $unitCollection[] = $unit;
        }

        return $unitCollection ?: null;
    }
}
