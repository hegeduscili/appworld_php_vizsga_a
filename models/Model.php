<?php

namespace models;

class Model
{

    public $table;

    function insert($fields_values, $conn)
    {

        $fieldlist = '`'.implode('`, `', array_keys($fields_values)).'`' ;
        $valuelist = "'".implode("', '", array_values($fields_values))."'";

        mysqli_query($conn, "insert into `$this->table` ($fieldlist) values ($valuelist)");

        return true;
    }
}
