<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode() : string
    {
        return "Appointment data encode in BloggsCal format \n";
    }
}