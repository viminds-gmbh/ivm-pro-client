<?php

namespace Qbus\IvmProClient\ApiRequest;

trait ClientMessageTrait
{
    public string $client_name;
    public string $client_firstname;
    // TODO: Allow only Herr or Frau
    public string $client_title;
    public string $client_street;
    // Note: This contains postal code and locality
    public string $client_city;
    // TODO: Valid email
    public string $client_email;
    public ?string $client_company;
    public ?string $client_nationality;
    // TODO: two-digit number
    public ?int $birthday_day;
    // TODO: two-digit number
    public ?int $birthday_month;
    // TODO: four-digit number
    public ?int $birthday_year;
    public ?string $client_phone_1;
    public ?string $client_phone_2;
    public ?string $client_mobile;
    public ?string $client_fax;
    // TODO: String OR array
    public $client_note;
    // TODO: As per docs, valid values have to be requested from the IVM vendor
    public ?int $client_advertising_id;
}
