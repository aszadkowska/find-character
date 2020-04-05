<?php


namespace App\Services;

use App\Model\Person\People;
use App\Model\Person\PersonFactory;
use App\SWAPI\API\PeopleAPI;
use GuzzleHttp\Client;

class PersonNameService
{
    /** @var PeopleAPI */
    protected $personName;

    /** @var People */
    protected $people;

    /** @var PersonFactory */
    protected $factory;

    /** @var Client */
    private $client;

    public function __construct(PeopleAPI $personName, People $people, PersonFactory $personFactory, Client $client)
    {
        $this->personName = $personName;
        $this->people = $people;
        $this->factory = $personFactory;
        $this->client = $client;
    }

    public function getPersonName()
    {
        foreach ($this->personName->getPeople() as $person) {
            $personName[] = [$person['name'], $person['gender']];
        }

        return $personName;
    }

    public function insertData()
    {
        foreach ($this->personName->getPeople() as $person) {
            $this->people->insert($this->factory->create($person));
        }

        var_dump('finish');
    }

    public function generateToken($token)
    {
        $response = $this->client->post('/api/generate-token', [
            'headers' => [
                'Authorization' => 'Bearer '. $token,
                'Accept' => 'application/json',
            ],
        ]);

        dd($response);
    }
}
