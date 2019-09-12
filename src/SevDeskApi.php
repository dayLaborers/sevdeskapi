<?php

namespace Daylaborers\Sevdeskapi;

use GuzzleHttp\Client;

final class SevDeskApi
{
    /**
     * The Guzzle Object
     *
     * @var object
     */
    private $client = null;

    /**
     * SevDeskApi constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * Get Objects from sevDesk
     *
     * @param $sevDeskObject
     *
     * @return array
     */
    public function getFromSevDesk($sevDeskObject)
    {
        $endpointUrl = config('sevDeskApi.apiEndpoints.'.lcfirst($sevDeskObject));
        $response    = $this->client->get($endpointUrl, [
            'headers' => $this->getHeader(),
        ]);
        $objects     = json_decode($response->getBody(), true);

        return $objects['objects'];
    }

    /**
     * Create an object in sevDesk
     *
     * @param $sevDeskObject
     * @param $modelAttributes
     *
     * @return array
     */
    public function saveToSevDesk($sevDeskObject, $modelAttributes)
    {
        $endpointUrl = config('sevDeskApi.apiEndpoints.'.lcfirst($sevDeskObject));
        $response    = $this->client->post($endpointUrl, [
            'headers'     => $this->getHeader(),
            'form_params' => $modelAttributes
        ]);
        $objects     = json_decode($response->getBody(), true);

        return $objects['objects'];
    }

    /**
     * Update an object in sevDesk
     *
     * @param $sevDeskObject
     * @param $modelAttributes
     *
     * @return array
     */
    public function updateToSevDesk($sevDeskObject, $modelAttributes)
    {
        $endpointUrl = config('sevDeskApi.apiEndpoints.'.lcfirst($sevDeskObject)).$modelAttributes['id'];
        $response    = $this->client->put($endpointUrl, [
            'headers'     => $this->getHeader(),
            'form_params' => $modelAttributes
        ]);
        $objects     = json_decode($response->getBody(), true);

        return $objects['objects'];
    }

    /**
     * Delete an object in sevDesk
     *
     * @param $sevDeskObject
     * @param $modelId
     *
     * @return array
     */
    public function deleteFromSevDesk($sevDeskObject, $modelId)
    {
        $endpointUrl = config('sevDeskApi.apiEndpoints.'.lcfirst($sevDeskObject)).$modelId;
        $response    = $this->client->delete($endpointUrl, [
            'headers' => $this->getHeader(),
        ]);
        $objects     = json_decode($response->getBody(), true);

        return $objects['objects'];
    }

    /**
     * Build curl Header
     *
     * @return array
     */
    private function getHeader()
    {
        return [
            'Authorization' => config('sevDeskApi.apiToken'),
            'Content-Type'  => 'application/x-www-form-urlencoded',
        ];
    }
}