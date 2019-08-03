<?php
namespace CreationalDesignPatterns\AbstractFactory\PhpObjectsPatternsAndPractice;

class MegaContactEncoder extends ContactEncoder{
    public function encode() : string
    {
        return "Contact data encode in Mega Format\n";
    }
}