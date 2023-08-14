<?php

spl_autoload_register(function ($className){
    require_once $className . '.php';
});

$calculator = new Calculator(10, 5, "/");
$calculator->calculator();

?>