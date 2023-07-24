<?php

namespace App;

use GuzzleHttp\Client;

class JsonPlaceholderAPI{

    private $uri = 'https://jsonplaceholder.typicode.com';
    private $client;

    public function __construct()
    {
        $this->client = new Client(['uri' => $this->uri]);
    }
}


