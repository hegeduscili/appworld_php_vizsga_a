<?php

include('./classes/PageController.php');
use classes\PageController;

$url = $_SERVER['REQUEST_URI'];

$page = new PageController;

switch ($url) {
    case '/':
        $page -> listUsers();
        break;

    case '/addUsers':
        $page -> addUsers();
        break;

    case '/editusers':

        break;

    default:

        break;
}
