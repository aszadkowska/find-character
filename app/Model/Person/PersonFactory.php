<?php


namespace App\Model\Person;

use App\Model\Factory;

class PersonFactory implements Factory
{
    public function create(array $data): Person
    {
        return new Person(
            $data['name'],
            $data['height'],
            $data['mass'],
            $data['hair_color'],
            $data['skin_color'],
            $data['eye_color'],
            $data['birth_year'],
            $data['gender'],
            $data['homeworld'],
            $data['films'],
            $data['species'],
            $data['vehicles'],
            $data['starships'],
            $data['created'],
            $data['edited'],
            $data['url']
        );
    }
}
