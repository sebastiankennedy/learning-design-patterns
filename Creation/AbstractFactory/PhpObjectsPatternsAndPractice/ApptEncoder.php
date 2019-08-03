<?php
namespace CreationalDesignPatterns\AbstractFactory\PhpObjectsPatternsAndPractice;

abstract class ApptEncoder
{
    abstract public function encode() : string;
}