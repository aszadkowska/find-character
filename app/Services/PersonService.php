<?php


namespace App\Services;

use App\Model\Person\People;
use App\Model\Person\PersonFactory;
use App\SWAPI\API\PeopleAPI;

class PersonService
{
    /** @var PeopleAPI */
    protected $personAPI;

    /** @var People */
    protected $people;

    /** @var PersonFactory */
    protected $factory;

    public function __construct(PeopleAPI $personAPI, People $people, PersonFactory $personFactory)
    {
        $this->personAPI = $personAPI;
        $this->people = $people;
        $this->factory = $personFactory;
    }

    public function insertData()
    {
        foreach ($this->personAPI->getPeople() as $person) {
            $this->people->insert($this->factory->create($person));
        }
    }

    public function deleteData()
    {
        $this->people->delete();
    }
}
