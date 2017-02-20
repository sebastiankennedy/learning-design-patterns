<?php
namespace Factory\FirstExample;

use Factory\FirstExample\CommsManager;
use Factory\FirstExample\BloggsApptEncoder;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText():string
    {
        return "BloggsCal header.\n";
    }

    public function getApptEncoder()
    {
        return new BloggsApptEncoder;
    }

    public function getFooterText():string
    {
        return "BloggsCal footer.\n";
    }
}