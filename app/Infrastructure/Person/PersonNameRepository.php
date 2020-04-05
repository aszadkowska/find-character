<?php


namespace App\Repositories;

use App\Infrastructure\DatabaseRepository;
use App\Model\Person\People;
use App\Model\Person\Person;

class PersonNameRepository extends DatabaseRepository implements People
{
    private const TABLE_NAME = 'people';

    public function findByName(string $name)
    {
        return $this->query(self::TABLE_NAME)
            ->where('name', $name)
            ->first();
    }

    public function insert(Person $data)
    {
        $this->query(self::TABLE_NAME)->insert([
                'name' => $data->name(),
                'height' => $data->height(),
                'mass' => $data->mass(),
                'hairColor' => $data->hairColor(),
                'skinColor' => $data->skinColor(),
                'eyeColor' => $data->eyeColor(),
                'birthYear' => $data->birthYear(),
                'gender' => $data->gender(),
                'homeworld' => $data->homeworld(),
//                'films' => $data->films(),
//                'species' => $data->species(),
//                'vehicles' => $data->vehicles(),
//                'starships' => $data->starships(),
//                'created' => $data->created(),
//                'edited' => $data->edited(),
                'url' => $data->url(),
            ]
        );
    }

    public function delete(): bool
    {
        return (bool)$this->query(self::TABLE_NAME)->delete();
    }
}
