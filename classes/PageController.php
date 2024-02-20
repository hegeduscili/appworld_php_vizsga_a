<?php

namespace classes;

use models\Register;

class PageController
{

    public $connection;

    function __construct($connection)
    {
        $this -> connection = $connection;
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
        $errors = [];

        if (strlen($_POST["name"]) < 3 || strlen($_POST["name"]) > 30) {
            $errors[] = 'A névnek minimum 3, maximum 30 karakterből kell állnia!';
        }

        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Az email cím invalid!';
        }

        if ($_POST["password"] < 3) {
            $errors[] = 'A jelszónak minimum 4 karakterből kell állnia!';
        }

        if ($_POST["password"] !== $_POST["passwordConfirmation"]) {
            $errors[] = 'A jelszavak nem egyeznek!';
        }

        if (count($errors) === 0) {
            $_SESSION["success"] = 'Sikeres regisztráció!';
            print $register -> insert($_POST, $this->connection);
        } else {
            $_SESSION["errors"] = $errors;
        }


        header("location:" . $_SERVER["HTTP_REFERER"]);
        exit;
    }



    function __destruct()
    {
        if ($_SERVER["REQUEST_METHOD"] !== 'POST') {
            unset($_SESSION["errors"], $_SESSION["success"]);
        }
    }
}
