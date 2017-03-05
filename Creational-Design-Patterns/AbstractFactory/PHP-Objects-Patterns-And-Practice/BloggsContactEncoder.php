<?php
namespace AbstractFactory\FirstExample;

class BloggsContactEncoder extends ContactEncoder{
    public function encode() : string
    {
        return "Contact data encode in BloggsCal format\n";
    }
}