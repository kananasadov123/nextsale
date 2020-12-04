<?php
namespace app\repositories;


class BaseConnection
{
    protected $connection = CONNECTION;
    protected $host = HOST;
    protected $database = DATABASE;
    protected $port = PORT;
    protected $username = USERNAME;
    protected $password = PASSWORD;
    protected $charset = CHARSET;
}