<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

class AccessManager
{
    public function login($username, $password)
    {
        if ($username === 'Red Queen' && $password === '123456') {
            echo "User Sign In Successfully !\n";
            return ['username' => $username, 'password' => $password];
        }

        return false;
    }

    public function getError()
    {
        return "AccessManager Something Wrong !";
    }
}