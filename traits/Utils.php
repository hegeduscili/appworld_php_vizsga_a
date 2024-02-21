<?php

namespace traits;

trait Utils {
    function getView($file){
        include(__DIR__ . "/../views/" . $file . ".php");

    }
}