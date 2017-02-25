<?php
namespace Factory\FirstExample;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode() : string
    {
        return "Appointment data encode in BloggsCal format \n";
    }
}