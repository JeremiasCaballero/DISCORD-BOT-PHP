<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

class ApiConnector
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getContent()
    {
        $response = $this->client->get('http://httpbin.org/get');
        return json_decode($response, true);
    }
}