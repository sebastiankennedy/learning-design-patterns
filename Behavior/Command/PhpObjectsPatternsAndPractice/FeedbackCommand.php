<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

// 具体命令类
class FeedbackCommand extends Command
{
    public function execute(CommandContext $context) : bool
    {
        $msgSystem = Registry::getMessageManager();
        $email = $context->get('email');
        $topic = $context->get('topic');
        $message = $context->get('message');
        $result = $msgSystem->send($email, $message, $topic);

        if (!$result) {
            $context->setError($msgSystem->getError());
            return false;
        }

        return true;
    }
}
