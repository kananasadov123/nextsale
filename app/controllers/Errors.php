<?php


class Errors
{

    public function __construct()
    {
        $this->error();
    }

    public function error()
    {
        require_once VIEW_PATH . '404.php';
    }
}