<?php

namespace CreationalDesignPatterns\Singleton\PhpObjectsPatternsAndPractice\SecondExample;

class RequestRegistry extends Registry
{
    private static $instance;
    private $values = [];

    private function __construct()
    {
    }

    public static function getRequest()
    {
        return self::instance()->get('request');
    }

    public function get($key)
    {
        return $this->values[$key];
    }

    public static function instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function setRequest(Request $request)
    {
        self::instance()->set('request', $request);
    }

    protected function set($key, $value)
    {
        $this->values[$key] = $value;
    }
}
