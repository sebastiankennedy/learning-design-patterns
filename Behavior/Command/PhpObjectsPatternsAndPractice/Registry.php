<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

// 全局注册表
class Registry
{
    public static function getAccessManager() : AccessManager
    {
        return new AccessManager();
    }

    public static function getMessageManager() : MessageSystem
    {
        return new MessageSystem();
    }
}