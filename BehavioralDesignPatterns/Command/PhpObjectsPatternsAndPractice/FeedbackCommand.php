<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

class FeedbackCommand extends Command
{
    public function execute(CommandContext $context)
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
