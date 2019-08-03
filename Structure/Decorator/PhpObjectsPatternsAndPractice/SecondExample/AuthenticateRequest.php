<?php
namespace StructuralDesignPatterns\Decorator\PhpObjectsPatternsAndPractice\SecondExample;

class AuthenticateRequest extends DecorateProcess
{
    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__ . ": authenticating request.\n";
        $this->processRequest->process($requestHelper);
    }
}