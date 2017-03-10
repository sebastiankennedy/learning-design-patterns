<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

abstract class ApptEncoder
{
    abstract public function encode() : string;
}