<?php
namespace Factory\FirstExample;

abstract class CommsManager
{
    abstract public function getHeaderText():string;

    abstract public function getApptEncoder();

    abstract public function getFooterText():string;
}