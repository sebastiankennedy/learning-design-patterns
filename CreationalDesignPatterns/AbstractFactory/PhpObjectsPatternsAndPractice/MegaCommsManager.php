<?php
namespace CreationalDesignPatterns\AbstractFactory\PhpObjectsPatternsAndPractice;

class MegaCommsManager extends CommsManager
{
    public function getHeaderText() : string
    {
        return "MegaCal header\n";
    }

    public function getFooterText() : string
    {
        return "MegaCal footer\n";
    }

    public function getApptEncoder() : ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getTtdEncoder() : TtdEncoder
    {
        return new MegaTtdEncoder();
    }

    public function getContactEncoder() : ContactEncoder
    {
        return new MegaContactEncoder();
    }
}