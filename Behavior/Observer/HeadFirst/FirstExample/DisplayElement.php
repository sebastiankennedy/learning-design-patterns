<?php

namespace BehavioralDesignPatterns\Observer\HeadFirst\FirstExample;

interface DisplayElement
{
    // 当初观察者需要显示数据时,调用此方法
    public function display() : void;
}