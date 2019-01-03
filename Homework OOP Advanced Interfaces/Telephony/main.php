<?php
spl_autoload_register();

$inputPhones = explode(' ', readline());

$inputSites = explode(' ', readline());


foreach ($inputPhones as $number){
    try{
        $phone = new Model();
        echo $phone->PhoneNumber($number);
    }
    catch (Exception $ex){
        echo $ex->getMessage();
    }
}


foreach ($inputSites as $site){
    try{
        $URL = new Model();
       echo  $URL->Browse($site);
    }
    catch (Exception $ex){
        echo $ex->getMessage();
    }
}