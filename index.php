<?php
session_start();
include_once 'controller/Controller.php';
include_once 'router/Router.php';

$router = new Router();
$router->route();
?>