<?php


namespace App\Model\Person;

interface People
{
    /**
     * @return Person
     */
    public function findByName(string $name);

    /**
     * @return Person
     */
    public function insert(Person $data);

    public function delete();
}

