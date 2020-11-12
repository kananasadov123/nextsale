<?php

class Database
{

    private $db;

    protected static $instance;

    private static $dsn = 'mysql:host=localhost;dbname=nextsale';

    private static $username = 'root';

    private static $password = '';

    private function __construct()
    {
        try {
            $this->db = new PDO(self::$dsn, self::$username, self::$password);
            $this->db->exec('SET NAMES utf8');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("PDO CONNECTION ERROR: " . $e->getMessage() . "<br/>");
        }
    }

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function prepare($statement, $driver_options = false)
    {
        if (!$driver_options) $driver_options = array();
        return $this->db->prepare($statement, $driver_options);
    }

    public function query($statement)
    {
        return $this->db->query($statement);
    }

    public function queryFetchAllAssoc($statement)
    {
        return $this->db->query($statement)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function queryFetchRowAssoc($statement)
    {
        return $this->db->query($statement)->fetch(PDO::FETCH_ASSOC);
    }

    public function queryFetchColAssoc($statement)
    {
        return $this->db->query($statement)->fetchColumn();
    }

    public function errorCode()
    {
        return $this->db->errorCode();
    }

    public function errorInfo()
    {
        return $this->db->errorInfo();
    }


}