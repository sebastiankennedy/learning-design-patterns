<?php
namespace CreationalDesignPatterns\AbstractFactory\PhpObjectsPatternsAndPractice;

abstract class TtdEncoder
{
    abstract public function encode():string;
}