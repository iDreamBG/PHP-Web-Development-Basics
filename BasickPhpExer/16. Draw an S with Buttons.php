<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php

for($q = 1; $q <= 5; $q++){
    echo "<button style='background-color: blue'>1</button>";
}

echo "<br>";

for($i = 1; $i <= 3; $i++){

    for($one = 1; $one <= 5; $one++){
        if($one == 1){
            echo "<button style='background-color: blue'>1</button>";
        }
        else {
            echo "<button>0</button>";
        }
    }

    echo "<br>";
}

for($w = 1; $w <= 5; $w++){
    echo "<button style='background-color: blue'>1</button>";
}

echo "<br>";

for($j = 1; $j <= 3; $j++){

    for($two = 1; $two <= 5; $two++){
        if($two == 5){
            echo "<button style='background-color: blue'>1</button>";
        }
        else {
            echo "<button>0</button>";
        }
    }

    echo "<br>";
}

for($e = 1; $e <= 5; $e++){
    echo "<button style='background-color: blue'>1</button>";
}

echo "<br>";

?>
</body>
</html>