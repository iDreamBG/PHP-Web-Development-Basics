<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num1" />
        M: <input type="text" name="num2" />
        <input type="submit" />
    </form>
	<ul>
        <?php
        if(isset($_GET['num1']) && isset($_GET['num2'])){
            $num1 = intval($_GET['num1']);
            $num2 = intval($_GET['num2']);

            echo "<ul>";

            for($i = 1; $i <= $num1; $i++){
                echo "<list>List $i";

                echo "<ul>";

                for($j = 1; $j <= $num2; $j++){
                    echo "<list>List $j";

                    echo "</list>";
                }

                echo "</ul>";

                echo "</list>";
            }

            echo "</ul>"
        }
        ?>
	</ul>
</body>
</html>