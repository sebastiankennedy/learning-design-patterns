<?php

namespace BehavioralDesignPatterns\Observer\HeadFirst\FirstExample;

interface Observer
{
    // 所有观察者都必须实现 update() 方法,当主题通知观察者时,观察者通过 update() 方法更新数据
    public function update(float $temperature, float $humidity, float $pressure) : void;
}