<?php 
namespace models;

class Model {

    public $table;

    function insert($fields_value){
        $field_list='`'.(implode('`,`',array_keys($fields_values)).'`');
        $value_list='`'.(implode('`,`',array_values($fields_values)).'`');

        mysqli_query($conn, "insert into `$this -> $table` ($field_list) value ($value_list)");
        if($err = mysqli_error($conn))
        die($err);

        return true;
}
}