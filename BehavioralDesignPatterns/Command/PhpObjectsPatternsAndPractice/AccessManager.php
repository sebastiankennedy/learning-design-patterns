<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

class AccessManager
{
    public function login($user, $pass)
    {
        if ($user === 'Red Queen' && $pass === '123456') {
            return $user . $pass . "Sign In Successfully !\n";
        }

        return false;
    }

    public function getError()
    {
        return "AccessManager Something Wrong !";
    }
}