<?php

$connection = mysqli_connect("localhost", "root", '', "appworld_php_a");

spl_autoload_register(function ($namespacedfile) {
    require(__DIR__ . DIRECTORY_SEPARATOR . str_replace("\\", DIRECTORY_SEPARATOR, "$namespacedfile.php"));
});


use classes\PageController;

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
