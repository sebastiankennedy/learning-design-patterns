<?php
namespace Factory\FirstExample;

use Factory\FirstExample\ApptEncoder;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode():string
    {
        return "Appointment data encode in BloggsCal format \n";
    }
}