<?php
$ocean = array(
    array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9),
    array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9)
);

$coordinates = array_map('floatval', explode(', ',readline()));


for($i = 0; $i <count($coordinates); $i+=2){

    $x = $coordinates[$i];
    $y = $coordinates[$i + 1];

  //  echo "x -> $x  ,  y -> $y".PHP_EOL;

    if($y >= 0 && $y <=1
        &&
        $x >= 8 && $x <=9){
        echo 'Tokelau'.PHP_EOL;
    }

    elseif ($y >= 1 && $y <= 3
        &&
        $x >= 1 && $x <= 3){
        echo 'Tuvalu'.PHP_EOL;
    }

    elseif ($y >= 3 && $y <= 6
        &&
        $x >= 5 && $x <= 7){
        echo 'Samoa'.PHP_EOL;
    }

    elseif ($y >= 6 && $y <= 7
        &&
        $x >= 0 && $x <= 2){
        echo 'Tonga'.PHP_EOL;
    }

    elseif ($y >= 4 && $y <= 9
        &&
        $x >= 7){
        echo 'Cook '.PHP_EOL;
    }
    else{
        if($y <= 3){
            echo 'On the bottom of the ocean'.PHP_EOL;
        }
    }



}



