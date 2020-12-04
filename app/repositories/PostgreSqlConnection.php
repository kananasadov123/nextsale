<?php

namespace app\repositories;

use app\repositories\Interfaces\DbInterface;

class PostgreSqlConnection extends BaseConnection implements DbInterface
{
    private $db;

    public function __construct()
    {
        $this->connect();
    }

    function connect()
    {
        try {
            $dsn = "$this->connection:host=$this->host;dbname=$this->database;charset=$this->charset;port=$this->port";

            $this->db = new \PDO($dsn, $this->username, $this->password);
            $this->db->exec('SET NAMES utf8');
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("PDO CONNECTION ERROR: " . $e->getMessage() . "<br/>");
        }
    }

    function select($table)
    {
        return $this->db->query('Select * from ' . $table)->fetchAll(\PDO::FETCH_ASSOC);
    }

    function insert($table_name, $data)
    {
        $key = array_keys($data);  //get key( column name)

        $value = array_values($data);  //get values (values to be inserted)

        $insert = $this->prepare("INSERT INTO $table_name ( " . implode(',', $key) . ") VALUES('" . implode("','", $value) . "')");

        $insert->execute($data);
    }

    function query($statement)
    {
        return $this->db->query($statement);
    }

    public function prepare($statement, $driver_options = false)
    {
        if (!$driver_options) $driver_options = array();
        return $this->db->prepare($statement, $driver_options);
    }

}