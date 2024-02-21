<?php


namespace classes;
session_start();

use classes\Controller;
use traits\Utils; 

class PageController extends Controller
{
    public $connection;

    use Utils;

    function __construct($connection)
    {
      $this->connection = $connection;
    }

    function listUsers()
    {
        $this->getView(__FUNCTION__);
    }

    function addUsers()
    {
        $this->getView(__FUNCTION__);
    }

    function login()
    {
        $this->getView(__FUNCTION__);
    }

    function register()
    {
        $this->getView(__FUNCTION__);
    }



    function registerProgress()
    {
        $errors = [];

        if (strlen($_POST["uname"]) < 3 || strlen($_POST["uname"]) > 30) {
            $errors[] = 'A felhasználónévnek minimum 3, maximum 30 karakterből kell állnia!';
        }

        if (strlen($_POST["fullname"]) < 5 || strlen($_POST["fullname"]) > 40) {
            $errors[] = 'A névnek minimum 5, maximum 40 karakterből kell állnia!';
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

            // $user = new User;
            // print $user->insert($_POST, $this->connection);
            // exit;
            $_SESSION["success"] = 'Sikeres regisztráció!';
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
