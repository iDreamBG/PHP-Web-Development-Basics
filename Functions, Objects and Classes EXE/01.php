<?php
$number = intval(readline());
$commands = explode(', ', readline());

$calculate = function ($command, $num){
    switch ($command){
        case 'chop':
            $num /=2;
            break;
        case 'dice':
            $num = sqrt($num);
            break;
        case 'spice':
            $num++;
            break;
        case 'bake':
            $num*=3;
            break;
        case 'fillet':
            $num -= $num * 0.2;
    }

    return $num;

};
$result = $number;
foreach ($commands as $command){
    $result = $calculate($command, $result);

    echo $result.PHP_EOL;
}