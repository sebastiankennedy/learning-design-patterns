<?php

namespace CreationalDesignPatterns\Singleton\PhpObjectsPatternsAndPractice\SecondExample;

class ApplicationRegistry extends Registry
{
    private static $instance;

    private $freezeDir = "data";

    private $values = [];

    private $mtimes = [];

    private function __construct()
    {

    }

    public static function getDSN()
    {
        return self::instance()->get('dsn');
    }

    protected function get($key)
    {
        $path = $this->freezeDir . DIRECTORY_SEPARATOR . $key;
        if (file_exists($path)) {
            clearstatcache();
            $mtime = filemtime($path);
            if (!isset($this->mtimes[$key])) {
                $this->mtimes[$key] = 0;
            }
            if ($mtime > $this->mtimes[$key]) {
                $data = file_get_contents($path);
                $this->mtimes[$key] = $mtime;
                return ($this->values[$key] = unserialize($data));
            }
        }

        if (isset($this->values[$key])) {
            return $this->values[$key];
        }

        return null;
    }

    public static function instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function setDSN($dsn)
    {
        self::instance()->set('dsn', $dsn);
    }

    protected function set($key, $val)
    {
        $this->values[$key] = $val;
        $path = $this->freezeDir . DIRECTORY_SEPARATOR . $key;
        file_put_contents($path, serialize($val));
        $this->mtimes[$key] = time();
    }
}
