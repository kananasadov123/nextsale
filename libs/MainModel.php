<?php

class MainModel
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
}