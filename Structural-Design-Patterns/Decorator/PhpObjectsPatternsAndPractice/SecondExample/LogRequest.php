<?php
namespace Decorator\SecondExample;

class LogRequest extends DecorateProcess
{
    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__ . ": logging request.\n";
        $this->processRequest->process($requestHelper);
    }
}