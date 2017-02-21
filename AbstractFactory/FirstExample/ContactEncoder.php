<?php
namespace AbstractFactory\FirstExample;

abstract class ContactEncoder
{
    abstract public function encode() : string;
}
