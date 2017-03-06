<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

class Registry
{
    public static function getAccessManager()
    {
        return new AccessManager();
    }

    public static function getMessageManager()
    {
        return new MessageSystem();
    }
}