<?php

namespace Qbus\IvmProClient\ApiRequest;

trait SearchParametersTrait
{
    public ?int $flat_space_from;
    public ?int $flat_space_to;
    public ?int $flat_rooms_from;
    // TODO: Enforce formatting as per docs "#ganzeRäume.#halbeRäume / Beispiel: 2.1 entspicht 2 ½ Räume"
    public ?float $flat_rooms_from_decimal;
    public ?int $flat_rooms_to;
    // TODO: Enforce formatting as per docs cf ...from...
    public ?float $flat_rooms_to_decimal;
    public ?int $flat_rent_from;
    public ?int $flat_rent_to;
    public ?int $flat_rent_all_from;
    public ?int $flat_rent_all_to;
    // TODO: Docs do not specify what this does, how is it different from flat_floorscount?
    public ?array $flat_floors;
    // TODO: Only numerical values allowed as per docs. Also: How does it work?
    public ?array $flat_floorscount;
    public ?string $flat_usenr;
    public ?array $flat_environment;
    public ?array $flat_street;
    // TODO: Allow only district IDs
    public ?array $flat_district;
    // TODO: Enforce formatting <field>,<ASC|DESC>
    public ?string $search_sort;
    public ?int $search_page;
    public ?int $language;
    // TODO: Allow only 1 or null
    public ?int $rented;
    // TODO: Allow only 1 or null
    public ?int $tafel;
    // TODO: Allow only 1 or null
    public ?int $flat_isverkauf;
}
