<?php
spl_autoload_register();

$name = readline();
$age = floatval(readline());
$type = readline();


$person = null;
$chil = null;

try {
    switch ($type) {
        case "Person":
            $person = new Person03($name, $age);
            echo 'This is '.$person->getName().' and he/she is '.$person->getAge().' years old!';
            break;
        case "Child":
            break;
        default:
            echo 'Invalid input';
    }
}
catch (Exception $ex){
    echo $ex->getMessage();
}