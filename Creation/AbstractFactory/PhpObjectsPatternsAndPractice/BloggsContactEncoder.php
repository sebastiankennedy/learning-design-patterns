<?php
namespace CreationalDesignPatterns\AbstractFactory\PhpObjectsPatternsAndPractice;

class BloggsContactEncoder extends ContactEncoder{
    public function encode() : string
    {
        return "Contact data encode in BloggsCal format\n";
    }
}