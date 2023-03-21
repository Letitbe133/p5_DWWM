<?php

namespace App\classes;

use Faker\Factory;

class Faker
{
    public $faker;
    private $users = [];

    public function __construct($language = 'fr_FR')
    {
        // initialisation de Faker
        $this->faker = Factory::create($language);
    }

    public function createName()
    {
        return $this->faker->name('female');
    }

    public function createUsers($nb = 1)
    {
        for ($i = 0; $i < $nb; ++$i) {
            // $this->users[] = $this->createUser();
            \array_push($this->users, $this->createUser());
        }
    }

    public function getUsers()
    {
        return $this->users;
    }

    private function createUser()
    {
        return [
            'fname' => $this->faker->firstName(),
            'lname' => $this->faker->lastName(),
            'age' => $this->faker->numberBetween(18, 100),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'phone' => $this->faker->phoneNumber(),
        ];
    }

    // public function greet($name = 'anonymous')
    // {
    //     return 'Hello '.$name;
    // }

    // public function getName()
    // {
    //     return $this->name;
    // }

    // public function setName(string $newName)
    // {
    //     $this->name = $newName;
    // }
}
