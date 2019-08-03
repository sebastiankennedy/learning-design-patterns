<?php
namespace StructuralDesignPatterns\Decorator\PhpObjectsPatternsAndPractice\SecondExample;

abstract class ProcessRequest
{
    abstract public function process(RequestHelper $request);
}