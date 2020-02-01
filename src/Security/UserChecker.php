<?php

namespace App\Security;

use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user)
    {
        if($user->getAccountDisabled()) {
            throw new \Exception();
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
    }
}