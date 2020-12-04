<?php

namespace app\libs;

use app\repositories\Interfaces\DbInterface;
use app\repositories\MSSqlConnection;
use app\repositories\MysqlConnection;
use app\repositories\PostgreSqlConnection;

class AppConfig
{
    private $dataSource;

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        switch (CONNECTION) {
            case 'mysql':
                $this->dataSource = new MysqlConnection();
                break;
            case 'pgsql':
                $this->dataSource = new PostgreSqlConnection();
                break;
            case 'mssql':
                $this->dataSource = new MSSqlConnection();
                break;
            default:
                $this->dataSource = new MysqlConnection();
        }
    }

    public function getDataSource(): DbInterface
    {
        return $this->dataSource;
    }
}