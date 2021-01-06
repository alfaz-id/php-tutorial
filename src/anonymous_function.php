<?php

$message = function ($msg){
    echo $msg.PHP_EOL;
};

$message("Hello Anonymous");

//inherit message
$name='alfaz.id';

$name = function () use ($name){
    var_dump($name);
};

$name();
