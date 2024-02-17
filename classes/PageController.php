<?php

namespace classes;

class PageController
{

    public $connection;

    function __construct()
    {
    }

    function listUsers()
    {
        include(__DIR__ . "/../views/" . __FUNCTION__ . ".php");
    }

    function addUsers()
    {
        include(__DIR__ . "/../views/" . __FUNCTION__ . ".php");
    }

    function login()
    {
        include(__DIR__ . "/../views/" . __FUNCTION__ . ".php");
    }

    function register()
    {
        include(__DIR__ . "/../views/" . __FUNCTION__ . ".php");
    }

    function registerProgress()
    {
        print_r($POST);
    }
}
