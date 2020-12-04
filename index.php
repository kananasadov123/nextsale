<?php

use app\controllers\UserController;
use app\libs\AppConfig;
use app\repositories\UserRepository;

require_once 'autoload.php';

$db_connection = new AppConfig();
$user_repository = new UserRepository($db_connection->getDataSource());

$url = (isset($_GET['url'])) ? $_GET['url'] : null;
$url = getUrl($url);

//$url[0] control
if ($url[0] == 'all') {
	$user = new UserController($user_repository);
	$user->all();
} elseif ($url[0] == 'add') {
	$user = new UserController($user_repository);
	$user->insert();
} else {
	die('Not found');
}




