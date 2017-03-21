<?php
namespace CreationalDesignPatterns\AbstractFactory\PhpObjectsPatternsAndPractice;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText() : string
    {
        return "BloggsCal header\n";
    }

    public function getFooterText() : string
    {
        return "BloggsCal footer\n";
    }

    public function getApptEncoder() : ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getTtdEncoder() : TtdEncoder
    {
        return new BloggsTtdEncoder();
    }

    public function getContactEncoder() : ContactEncoder
    {
        return new BloggsContactEncoder();
    }
}