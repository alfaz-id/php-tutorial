<?php
//function non argument
echo 'Please input name : ';
$input_name = fopen("php://stdin","r");
$name =trim(fgets($input_name));

echo 'Please input birth year : ';
$input_number = fopen("php://stdin","r");
$number =trim(fgets($input_number));

function get_age(int $birth_year){
    $current_year = date('Y');
    return $current_year -$birth_year;
}

function get_number($name,int $age){
    echo 'Your name is '.$name. ' and age '.get_age($age).' year ago '.PHP_EOL;
}

get_number($name,intval($number));