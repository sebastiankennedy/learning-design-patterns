<?php
namespace Factory\FirstExample;

class MegaCommsManager extends CommsManager
{
    public function getHeaderText() : string
    {
        return "Mega header.\n";
    }

    public function getApptEncoder() : ApptEncoder
    {
        return new MegaApptEncoder;
    }

    public function getFooterText() : string
    {
        return "Mega footer.\n";
    }
}