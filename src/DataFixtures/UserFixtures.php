<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Enum\AccountEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $userName = "user";
        $password = "123456789";

        for ($i=0; $i < 40; $i++) {
            $user = new User();
            $user->setUsername($userName.$i);
            $user->setRoles(['ROLE_USER']);
            $password = $this->encoder->encodePassword($user, $password);
            $user->setPassword($password);
            $user->setAccountDisabled(rand(0,1));
            $manager->persist($user);
            $manager->flush();
        }
    }
}
