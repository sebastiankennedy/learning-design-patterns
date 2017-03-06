<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

class FeedbackCommand extends Command
{
    public function execute(CommandContext $context)
    {
        $msgSystem = Registry::getMessageManager();
        $email = $context->get('email');
        $msg = $context->get('msg');
        $topic = $context->get('topic');
        $result = $msgSystem->send($email, $msg, $topic);

        if ( ! $result) {
            $context->setError($msgSystem->getError());
            return false;
        }

        return true;
    }
}
