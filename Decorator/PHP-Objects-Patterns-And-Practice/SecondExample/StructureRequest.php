<?php
namespace Decorator\SecondExample;

class StructureRequest extends DecorateProcess
{
    public function process(RequestHelper $requestHelper)
    {
        echo __CLASS__ . ": structuring request data.\n";
        $this->processRequest->process($requestHelper);
    }
}