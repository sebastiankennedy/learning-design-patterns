<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

class MessageSystem
{
    public function send($email, $message, $topic)
    {
        if ($email === 'LuisEdward@qq.com' && $message === 'Hello Command Pattern' && $topic === 'Design Patterns') {
            echo "Send Email Successfully !\n";
            return ['email' => $email, ',message' => $message, 'topic' => $topic];
        }
    }

    public function getError()
    {
        return "MessageSystem Something Wrong !";
    }
}