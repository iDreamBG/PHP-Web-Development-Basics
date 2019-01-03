<?php
$lines = intval(readline());

$oldest = 0;
$name = '';
for($i = 0; $i < $lines; $i++){
    $line = explode(' ',readline());

    $age = $line[1];
    if($age > $oldest){
        $oldest = $age;
        $name = $line[0];
    }
}

echo "$name $oldest";