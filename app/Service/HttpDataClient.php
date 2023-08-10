<?php

namespace App\Service;

use GuzzleHttp\Client;

class HttpDataClient
{
    public $client;

    public function handler()
    {
        $client = new Client (['base_uri' => 'https://api.nbrb.by/',]);
        $response = $client -> request('GET', 'exrates/rates/431');
        $data = json_decode($response -> getBody() -> getContents());
        return $data;
    }
}