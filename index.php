<?php

$container = require_once __DIR__ . "/container.php";

require_once __DIR__ . "/core/Router.php";
require_once __DIR__ . "/core/MenuConnection.php";

error_reporting(E_ALL);
ini_set("display_errors", 1);

$router = new Router();

require_once __DIR__ . "/routes.php";

$page = $_GET["page"] ?? "home";
$requestMethod = $_SERVER["REQUEST_METHOD"];

$route = $router->route($page, $requestMethod);

require_once __DIR__ . "/" . $route["file"];

$database = $container["database"]();

MenuConnection::init($database);

$class = $route["class"];
$method = $route["controllerMethod"];

$controller = new $class($database);

$view = $controller->$method();

if ($view instanceof View) {
    $view->render();
}