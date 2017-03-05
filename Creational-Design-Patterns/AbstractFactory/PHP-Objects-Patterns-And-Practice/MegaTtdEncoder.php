<?php
namespace AbstractFactory\FirstExample;

class MegaTtdEncoder extends TtdEncoder{
    public function encode() : string
    {
        return "Ttd data encode in BloggsCal Format\n";
    }
}