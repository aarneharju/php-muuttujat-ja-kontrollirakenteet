<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $luku1 = 1;
        $luku2 = 2;

        function add($x, $y) {
            return $x + $y;
        }

        function subtract($x, $y) {
            return $x - $y;
        }

        function multiply($x, $y) {
            return $x * $y;
        }

        function divide($x, $y) {
            return $x / $y;
        }

        function modulo($x, $y) {
            return $x % $y;
        }

        echo "<p>$luku1 + $luku2 = ".add($luku1, $luku2)."</p>";
        echo "<p>$luku1 - $luku2 = ".subtract($luku1, $luku2)."</p>";
        echo "<p>$luku1 * $luku2 = ".multiply($luku1, $luku2)."</p>";
        echo "<p>$luku1 / $luku2 = ".divide($luku1, $luku2)."</p>";
        echo "<p>$luku1 % $luku2 = ".modulo($luku1, $luku2)."</p>";

    ?>
</body>
</html>