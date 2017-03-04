<?php
namespace Observer\FirstExample;

interface Observer
{
    public function update(Observable $observable);
}