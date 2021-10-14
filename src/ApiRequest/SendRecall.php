<?php

namespace Qbus\IvmProClient\ApiRequest;

class SendRecall extends AbstractApiRequest
{
    protected $requestPath = 'json_send_recall.php';
    protected $requestMethod = 'POST';

    // TODO: Many of these also appear in ClientMessageTrait

    // TODO: Allow only "1" or "save"
    public string $save_telserv;
    // TODO: Allow only "aktiv", "inaktiv", or "both"
    public string $client_type;
    public ?string $client_number;
    public ?string $mitgliedsnummer;
    // TODO: Allow only "Herr", "Frau", or "Eheleute"
    public string $client_title;
    public string $client_name;
    public string $client_firstname;
    public ?string $client_phone_1;
    public ?string $client_mobile;
    public ?string $client_street;
    public ?string $client_city;
    // TODO: Required if `client_type=aktiv|both`
    public ?string $flat_we;
    // TODO: Required if `client_type=aktiv|both`
    public ?string $flat_housenr;
    // TODO: Required if `client_type=aktiv|both`
    public ?string $flat_number;
    // TODO: Required if `client_type=aktiv|both`
    public ?string $flat_street;
}
