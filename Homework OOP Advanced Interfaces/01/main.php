<?php

spl_autoload_register();

$name = readline();
$age = readline();
$id = readline();
$birthdate = readline();


$cirtizen = new Citizen($name, $age, $id, $birthdate);
echo $cirtizen;