<?php
namespace Decorator\SecondExample;

abstract class ProcessRequest
{
    abstract public function process(RequestHelper $request);
}