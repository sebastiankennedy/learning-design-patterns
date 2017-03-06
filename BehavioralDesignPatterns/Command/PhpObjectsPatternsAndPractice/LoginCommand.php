<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

class LoginCommand extends Command
{
    public function execute(CommandContext $context)
    {
        $manager = Registry::getAccessManager();
        $user = $context->get('username');
        $pass = $context->get('pass');
        $userObj = $manager->login($user, $pass);

        if (is_null($userObj)) {
            $context->setError($manager->getError());
            return false;
        }

        $context->addParam('user', $userObj);
        return true;
    }
}