<?php

spl_autoload_register();

$arr[] = [];
$count = 0;
while (true) {
    $input = explode(' ', readline());

    if ($input[0] == 'End') {
        break;
    }

    $arr[$count] = $input;
    $count++;
}

$searchYear = readline();

foreach ($arr as $line) {
$Timer = 0;
    if ($line[0] == 'Citizen') {
        $name = $line[1];
        $age = $line[2];
        $id = $line[3];
        $date = $line[4];
        $citizen = new Citizen($name, $age, $id, $date, $searchYear);
        echo $citizen->search($searchYear, $date) . PHP_EOL;
        $Timer++;
    }
    else if ($line[0] == 'Pet') {
        $date = $line[2];
        $pet = new Pet($date, $searchYear);
        echo $pet->search($searchYear, $date) . PHP_EOL;
        $Timer++;
    }

    if($Timer == 0){
        echo '<no output>';
    }
}