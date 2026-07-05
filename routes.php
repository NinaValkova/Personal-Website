<?php

$router->get("home", "controllers/user_controller.php", "UserController", "home");
$router->get("summary", "controllers/user_controller.php", "UserController", "summary");
$router->get("personal", "controllers/user_controller.php", "UserController", "personal");
$router->get("academic", "controllers/user_controller.php", "UserController", "academic");

$router->get("contacts", "controllers/contact_controller.php", "ContactController", "index");
$router->post("contacts", "controllers/contact_controller.php", "ContactController", "store");


// $routes = [
//     "home" => [
//         "file" => "controllers/user_controller.php",
//         "class" => "UserController",
//         "method" => "home"
//     ],

//     "summary" => [
//         "file" => "controllers/user_controller.php",
//         "class" => "UserController",
//         "method" => "summary"
//     ],

//     "personal" => [
//         "file" => "controllers/user_controller.php",
//         "class" => "UserController",
//         "method" => "personal"
//     ],

//     "academic" => [
//         "file" => "controllers/user_controller.php",
//         "class" => "UserController",
//         "method" => "academic"
//     ],

//     "contacts" => [
//         "file" => "controllers/contact_controller.php",
//         "class" => "ContactController",
//         "method" => "index"
//     ]
// ]; 