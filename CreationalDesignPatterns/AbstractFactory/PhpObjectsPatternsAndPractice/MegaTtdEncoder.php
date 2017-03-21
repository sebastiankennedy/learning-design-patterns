<?php
namespace CreationalDesignPatterns\AbstractFactory\PhpObjectsPatternsAndPractice;

class MegaTtdEncoder extends TtdEncoder{
    public function encode() : string
    {
        return "Ttd data encode in BloggsCal Format\n";
    }
}