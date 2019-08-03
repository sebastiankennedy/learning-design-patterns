<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText() : string
    {
        return "BloggsCal header.\n";
    }

    public function getApptEncoder() : ApptEncoder
    {
        return new BloggsApptEncoder;
    }

    public function getFooterText() : string
    {
        return "BloggsCal footer.\n";
    }
}