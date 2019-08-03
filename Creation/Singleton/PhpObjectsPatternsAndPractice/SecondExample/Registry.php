<?php

namespace CreationalDesignPatterns\Singleton\PhpObjectsPatternsAndPractice\SecondExample;

abstract class Registry
{
    abstract protected function get($key);

    abstract protected function set($key, $value);
}
