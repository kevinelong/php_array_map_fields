<?php

$item = array("id" => 123, "name" => "demo", "quantity" => 456);
$keys = array_keys($item);
$values = array_values($item);

// ALL AT ONCE
echo implode(",",
    array_map(
        function ($k, $v) {
            return "$k='$v'";
        }
        ,
        $keys,
        $values
    )
);

echo("\n");

// A STEP AT A TIME

function mix($k, $v) {
    return "$k='$v'";
}

$mixed = array_map( "mix", $keys, $values);

echo implode(",",$mixed);


/***

OUTPUT:

id='123',name='demo',quantity='456'
id='123',name='demo',quantity='456'

 ***/