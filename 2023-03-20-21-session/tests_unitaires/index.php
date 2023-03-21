<?php

use App\classes\Faker;

require_once './vendor/autoload.php';

$faker = new Faker('it_IT');

$faker->createUsers(3);

$users = $faker->getUsers();

var_dump($users);
