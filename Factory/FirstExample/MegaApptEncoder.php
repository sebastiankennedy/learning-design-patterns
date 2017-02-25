<?php
namespace Factory\FirstExample;

class MegaApptEncoder extends ApptEncoder
{
    public function encode() : string
    {
        return "Appointment data encode in MegaApptEncoder format \n";
    }
}