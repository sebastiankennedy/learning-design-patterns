<?php

namespace BehavioralDesignPatterns\Command\PhpObjectsPatternsAndPractice;

// 命令接受者
class CommandContext
{
    private $params = [];

    private $error = "";

    public function __construct()
    {
        $this->params = $_REQUEST;
    }

    public function addParam($key, $val)
    {
        $this->params[$key] = $val;
    }

    public function get($key)
    {
        return $this->params[$key];
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;
    }
}