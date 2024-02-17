<?php

namespace classes;

class PageController{

    function __construct(){

    }

    function listUsers(){
        include(__DIR__."/../views/".__FUNCTION__.".php");
    }

    function addUsers(){
        include(__DIR__."/../views/".__FUNCTION__.".php");
    }
}