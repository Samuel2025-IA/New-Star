<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ✅ Mostrar la landing si no hay controlador
if (!isset($_GET['controller'])) {
    require_once "Views/home/index.php";
    return;
}

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'login';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

require_once "controller/" . ucfirst($controller) . "Controller.php";
$controllerName = ucfirst($controller) . "Controller";
$obj = new $controllerName();
$obj->$action();

