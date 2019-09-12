<?php

namespace Daylaborers\Sevdeskapi;

use GuzzleHttp\Client;

final class SevDeskApi
{
    private $client = null;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getFromSevDesk($sevDeskObject)
    {
        $endpointUrl = config('sevDeskApi.apiEndpoints.'.lcfirst($sevDeskObject));
        $response    = $this->client->get($endpointUrl, [
            'headers' => [
                'Authorization' => config('sevDeskApi.apiToken'),
                'Content-Type'  => 'application/x-www-form-urlencoded',
            ]
        ]);
        $objects     = json_decode($response->getBody(), true);

        return $objects['objects'];
    }

    public function saveToSevDesk($sevDeskObject, $modelAttributes)
    {
        $endpointUrl = config('sevDeskApi.apiEndpoints.'.lcfirst($sevDeskObject));
        $response    = $this->client->post($endpointUrl, [
            'headers' => [
                'Authorization' => config('sevDeskApi.apiToken'),
                'Content-Type'  => 'application/x-www-form-urlencoded',
            ],
            'form_params' => $modelAttributes
        ]);
        $objects     = json_decode($response->getBody(), true);

        return $objects['objects'];
    }

    public function updateToSevDesk()
    {

    }

    public function deleteFromSevDesk()
    {

    }
}