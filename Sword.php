<?php

$num = intval(readline());

$numMinusOne = $num - 1;
$numMinusTwo = $num - 2;
$numPlusThree = $num + 3;
$numMinusFive = $num - 5;

echo str_repeat("#", $numMinusOne);
echo "/^\\";
echo str_repeat("#", $numMinusOne)."\n";

$floorTwo = floor($num / 2);

for($one = 0; $one <= $floorTwo - 1; $one++){
    echo str_repeat("#", $numMinusTwo - $one);
    echo ".";
    $a = str_repeat(" ", 3 + (2*$one));
    echo $a;
    echo ".";
    $b = str_repeat("#",$numMinusTwo - $one);
    echo $b."\n";
}

echo $b."|".str_repeat(" ", $floorTwo)."S". str_repeat(" ", $floorTwo)."|".$b."\n";
echo $b."|".str_repeat(" ", $floorTwo)."O". str_repeat(" ", $floorTwo)."|".$b."\n";
echo $b."|".str_repeat(" ", $floorTwo)."F". str_repeat(" ", $floorTwo)."|".$b."\n";
echo $b."|".str_repeat(" ", $floorTwo)."T". str_repeat(" ", $floorTwo)."|".$b."\n";
echo $b."|".$a."|".$b."\n";

for($two = 1; $two <= $numMinusFive; $two++){
    echo $b."|".$a."|".$b."\n";
}

echo $b."|".str_repeat(" ", $floorTwo)."U". str_repeat(" ", $floorTwo)."|".$b."\n";
echo $b."|".str_repeat(" ", $floorTwo)."N". str_repeat(" ", $floorTwo)."|".$b."\n";
echo $b."|".str_repeat(" ", $floorTwo)."I". str_repeat(" ", $floorTwo)."|".$b."\n";

echo "@".str_repeat("=", ($num * 2) - 1)."@"."\n";

$ceilTwo = ceil($num / 2);

$uff = abs(((($ceilTwo + 1) + ($ceilTwo+1)) + 2 ) - ((2*$num)+1));

for($i =1;$i<=$floorTwo;$i++){
    echo "#";
    echo str_repeat("#", $ceilTwo);
    echo "|";
    echo str_repeat(" ", $uff);
    echo "|";
    echo str_repeat("#", $ceilTwo);
    echo "#"."\n";
}

echo "#";
echo str_repeat("#", $ceilTwo);
echo "\\";
echo str_repeat(".", $uff);
echo "/";
echo str_repeat("#", $ceilTwo);
echo "#";