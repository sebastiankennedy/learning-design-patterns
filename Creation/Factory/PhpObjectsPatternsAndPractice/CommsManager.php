<?php
namespace CreationalDesignPatterns\Factory\HeadFirst;

abstract class CommsManager
{
    abstract public function getHeaderText() : string;

    abstract public function getApptEncoder() : ApptEncoder;

    abstract public function getFooterText() : string;
}