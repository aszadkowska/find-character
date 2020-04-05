<?php

namespace App\SWAPI\API;

use GuzzleHttp\Client;

class PeopleAPI
{
    /** @var Client*/
    private $client;

    /** @var string*/
    private $baseApiUrl = 'https://swapi.co';

    public function __construct(Client $client)
    {
        $this->client = new Client(['base_uri' => $this->baseApiUrl]);
    }

    public function getPeople(): array
    {
        $page = 1;
        $response = [];

        while ($page < $this->getNumberOfPage() || $page < 10) {
            $response = array_merge($response, json_decode(
                $this->client->get('/api/people/?page=' . $page . '')->getBody(),
                true
            )['results']);

            $page++;
        }

        return $response;
    }

    protected function getNumberOfPage(): int
    {
        $response = json_decode($this->client->get('/api/people/')->getBody(), true);

        return ceil($response['count'] / count($response['results']));
    }
}
