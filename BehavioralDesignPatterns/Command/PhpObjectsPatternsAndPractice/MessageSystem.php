<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

class MessageSystem
{
    public function send($email, $message, $topic)
    {
        if ($email === 'LuisEdward@qq.com' && $message === 'Hello Command Pattern' && $topic === 'Design Patterns') {
            return $email . $message . $topic . 'Send Email Successfully !';
        }
    }

    public function getError()
    {
        return "MessageSystem Something Wrong !";
    }
}