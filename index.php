<?php
session_start();

include('./classes/PageController.php');
 
use classes\PageController;

$connection = mysqli_connect("localhost", "root", '', "appworld_php_a");

$url = $_SERVER['REQUEST_URI'];

$page = new PageController($connection);

switch ($url) {
    case '/':
        $page->listUsers();
        break;

    case '/addUsers':
        $page->addUsers();
        break;

    case '/register':

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $page->register();
        } else {
            $page->registerProgress();
        }


        break;

    case '/login':
        $page->login();
        break;

    default:

        break;
}
