<?php

use App\classes\Faker;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class FakerTest extends TestCase
{
    public function testGetUsersShouldReturnAnArray()
    {
        // instance de la classe Faker
        $faker = new Faker();

        // creation de users
        $faker->createUsers(5);

        // récupération du tableau des users
        $users = $faker->getUsers();

        $this->assertIsArray($users);
    }

    public function testCreateUsersShouldCreateArrayOfLength3()
    {
        // instance de la classe Faker
        $faker = new Faker();

        // creation de users
        $faker->createUsers(3);

        // on vérifié la longueur du tableau $users
        $count = count($faker->getUsers());

        $this->assertEquals(3, $count);
    }

    public function testCreateUsersShouldThrowInvalidArgumentException()
    {
        // instance de la classe Faker
        $faker = new Faker();
        $result = null;

        try {
            // code...
            // creation de users
            $faker->createUsers(0);
        } catch (\Throwable $error) {
            // throw $th;

            $result = $error;
        }

        $this->assertInstanceOf(\InvalidArgumentException::class, $result);
    }
}
