<?php
namespace Observer\FirstExample;

class Login implements Observable
{
    private $observers;

    public function __construct()
    {
        $this->observers = [];
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        $newObservers = [];
        foreach ($this->observers as $item) {
            if ($item !== $observer) {
                $newObservers[] = $item;
            }
        }

        $this->observers = $newObservers;
    }

    public function handleLogin()
    {
        $this->notify();
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}