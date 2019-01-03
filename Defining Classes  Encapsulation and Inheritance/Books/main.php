<?php

spl_autoload_register();

$author = readline();
$title = readline();
$price = floatval(readline());
$type = readline();

$book = null;
try {
    switch ($type) {

        case "STANDARD":
            $book = new Book($author, $title, $price);
            $book->getPrice();
            break;
        case "GOLD":
            $book = new Goldeditionbooks($author, $title, $price);
            $book->increasePrice();
            $book = new Book($author,$title,$price);
            break;
        default:
            throw new Exception('Type is not valid!');

    }
    echo 'OK'.PHP_EOL;
    echo $book->getPrice();
}
catch (Exception $ex){
    echo $ex->getMessage();
}