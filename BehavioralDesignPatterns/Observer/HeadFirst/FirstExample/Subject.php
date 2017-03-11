<?php

namespace BehavioralDesignPatterns\Observer\HeadFirst\FirstExample;

interface Subject
{
    // 注册观察者
    public function registerObserver(Observer $observer) : void;

    // 删除观察者
    public function removeObserver(Observer $observer) : void;

    // 当主题状态改变时,通知所有观察者
    public function notifyObservers() : void;
}