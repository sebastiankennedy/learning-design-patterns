<?php
namespace Observer\SecondExample;

class Login implements \SplSubject
{
    private $storage;

    public function __construct()
    {
        $this->storage = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    public function notify()
    {
        echo __CLASS__ . " : SplSubject notify Your Mother!\n";
        foreach ($this->storage as $observer) {
            $observer->update($this);
        }
    }
}

