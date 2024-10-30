<?php
require 'config.php';

$controller = $_GET['controller'] ?? 'user';
$action = $_GET['action'] ?? 'index';

require "controllers/" . ucfirst($controller) . "Controller.php";
$controllerName = ucfirst($controller) . "Controller";
$controller = new $controllerName();
$controller->$action();
?>
