<?php
namespace AbstractFactory\FirstExample;

class MegaApptEncoder extends ApptEncoder{
    public function encode() : string
    {
        return "Appointment data encode in MegaCal Format\n";
    }
}