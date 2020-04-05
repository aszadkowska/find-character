<?php

namespace App\Model\Person;

use DateTime;

class Person
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $height;

    /** @var string */
    protected $mass;

    /** @var string */
    protected $hairColor;

    /** @var string */
    protected $skinColor;

    /** @var string */
    protected $eyeColor;

    /** @var string */
    protected $birthYear;

    /** @var string */
    protected $gender;

    /** @var string */
    protected $homeworld;

    /** @var array */
    protected $films;

    /** @var array */
    protected $species;

    /** @var array */
    protected $vehicles;

    /** @var array */
    protected $starships;

    /** @var string */
    protected $created;

    /** @var string */
    protected $edited;

    /** @var string */
    protected $url;

    public function __construct(
        string $name,
        string $height,
        string $mass,
        string $hairColor,
        string $skinColor,
        string $eyeColor,
        string $birthYear,
        string $gender,
        string $homeworld,
        array $films,
        array $species,
        array $vehicles,
        array $starships,
        string $created,
        string $edited,
        string $url
    ) {
        $this->name = $name;
        $this->height = $height;
        $this->mass = $mass;
        $this->hairColor = $hairColor;
        $this->skinColor = $skinColor;
        $this->eyeColor = $eyeColor;
        $this->birthYear = $birthYear;
        $this->gender = $gender;
        $this->homeworld = $homeworld;
        $this->films = $films;
        $this->species = $species;
        $this->vehicles = $vehicles;
        $this->starships = $starships;
        $this->created = $created;
        $this->edited = $edited;
        $this->url = $url;
    }


    public function name(): string
    {
        return $this->name;
    }

    public function gender(): string
    {
        return $this->gender;
    }

    public function height(): string
    {
        return $this->height;
    }

    public function mass(): string
    {
        return $this->mass;
    }

    public function hairColor(): string
    {
        return $this->hairColor;
    }

    public function skinColor(): string
    {
        return $this->skinColor;
    }

    public function eyeColor(): string
    {
        return $this->eyeColor;
    }

    public function birthYear(): string
    {
        return $this->birthYear;
    }

    public function homeworld(): string
    {
        return $this->homeworld;
    }

    public function films(): string
    {
        return json_encode($this->films);
    }

    public function species(): string
    {
        return json_encode($this->species);
    }

    public function vehicles(): string
    {
        return json_encode($this->vehicles);
    }

    public function starships(): string
    {
        return json_encode($this->starships);
    }

    public function created(): DateTime
    {
        return date_create($this->created);
    }

    public function edited(): DateTime
    {
        return date_create($this->edited);
    }

    public function url(): string
    {
        return $this->url;
    }
}
