<?php
namespace Factory\FirstExample;

use Factory\FirstExample\ApptEncoder;

class MegaApptEncoder extends ApptEncoder
{
    public function encode():string
    {
        return "Appointment data encode in MegaApptEncoder format \n";
    }
}