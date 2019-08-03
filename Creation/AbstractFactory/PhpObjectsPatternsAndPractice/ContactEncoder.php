<?php
namespace CreationalDesignPatterns\AbstractFactory\PhpObjectsPatternsAndPractice;

abstract class ContactEncoder
{
    abstract public function encode() : string;
}
