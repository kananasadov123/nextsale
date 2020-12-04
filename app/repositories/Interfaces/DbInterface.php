<?php

namespace app\repositories\Interfaces;

interface DbInterface
{
    function connect();

    function select($table);

    function insert($table_name, $data);

    function query($statement);

}