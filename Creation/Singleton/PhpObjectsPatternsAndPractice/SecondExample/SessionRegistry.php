<?php

namespace CreationalDesignPatterns\Singleton\PhpObjectsPatternsAndPractice\SecondExample;

class SessionRegistry extends Registry
{
    private static $instance;

    private function __construct()
    {
        session_start();
    }

    public function setComplex(Complex $complex)
    {
        self::instance()->set('complex', $complex);
    }

    protected function set($key, $val)
    {
        $_SESSION[__CLASS__][$key] = $val;
    }

    public static function instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getComplex()
    {
        return self::instance()->get('complex');
    }

    protected function get($key)
    {
        if (isset($_SESSION[__CLASS__][$key])) {
            return $_SESSION[__CLASS__][$key];
        }

        return null;
    }
}