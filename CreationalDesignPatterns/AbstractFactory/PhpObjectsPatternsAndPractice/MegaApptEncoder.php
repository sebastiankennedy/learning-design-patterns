<?php
namespace CreationalDesignPatterns\AbstractFactory\PhpObjectsPatternsAndPractice;

class MegaApptEncoder extends ApptEncoder{
    public function encode() : string
    {
        return "Appointment data encode in MegaCal Format\n";
    }
}