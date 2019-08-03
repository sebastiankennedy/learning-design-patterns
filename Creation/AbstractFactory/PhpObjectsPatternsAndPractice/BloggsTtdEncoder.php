<?php
namespace CreationalDesignPatterns\AbstractFactory\PhpObjectsPatternsAndPractice;

class BloggsTtdEncoder extends TtdEncoder{
    public function encode() : string
    {
        return "Ttd data encode in BloggsCal format\n";
    }
}
