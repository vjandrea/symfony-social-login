<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    private const HASHED_TEST_PASSWORD = '$2y$13$c77NG4xudL2Rzx0zbcJo.e2g94BWQpcWQTkcgrE1I4ZujfHe2X90.';  // test123

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('user@localhost');
        $user->setPassword(self::HASHED_TEST_PASSWORD);

        $manager->persist($user);

        $manager->flush();
    }
}
