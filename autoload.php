<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'config/database.php';
require_once 'app/libs/AppConfig.php';
require_once 'app/libs/MainController.php';
require_once 'app/libs/JsonResponse.php';
require_once 'app/models/User.php';
require_once 'app/repositories/BaseConnection.php';
require_once 'app/repositories/Interfaces/DbInterface.php';
require_once 'app/repositories/MysqlConnection.php';
require_once 'app/repositories/PostgreSqlConnection.php';
require_once 'app/repositories/MSSqlConnection.php';
require_once 'app/repositories/Interfaces/RepositoryInterface.php';
require_once 'app/repositories/UserRepository.php';
require_once 'app/controllers/UserController.php';


function getUrl($url)
{
	if ($url != null) {
		$url = filter_var($url, FILTER_SANITIZE_URL);
		$url = rtrim($url, '/');
		$url = explode('/', $url);
	} else {
		die('Not found');
	}
	return $url;
}
