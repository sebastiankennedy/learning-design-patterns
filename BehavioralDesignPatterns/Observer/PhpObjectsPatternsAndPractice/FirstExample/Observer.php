<?php
namespace BehavioralDesignPatterns\Observer\PhpObjectsPatternsAndPractice\FirstExample;

interface Observer
{
    public function update(Observable $observable);
}