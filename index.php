<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'config/config.php';

function autoloadLib($class)
{
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    if (is_readable('libs/' . $class . ".php")) {
        require_once('libs/' . $class . '.php');
    }
}
spl_autoload_register("autoloadLib");


$boot = new Route();
$boot->split();


?>