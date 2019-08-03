<?php
namespace CreationalDesignPatterns\Singleton\PhpObjectsPatternsAndPractice\FirstExample;

class Preferences
{
    private static $instance;
    private $props = [];

    private function __construct()
    {
    }

    public static function getInstance() : self
    {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function setProperty(string $key, $val)
    {
        $this->props[$key] = $val;
    }

    public function getProperty(string $key)
    {
        if (!array_key_exists($key, $this->props)) {
            return null;
        }
        return $this->props[$key];
    }
}
