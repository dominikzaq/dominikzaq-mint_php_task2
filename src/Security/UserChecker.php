<?php

namespace App\Security;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user)
    {
        if($user->getAccountDisabled()) {
            throw new Exception('Account is disabled');
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
    }
}