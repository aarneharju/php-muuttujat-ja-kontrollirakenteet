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

        $luku = rand(1,10);

        if ($luku > 5) {
            echo "Random number $luku is big!!";
        } else {
            echo "Random number $luku is small!!";
        }
        

    ?>
</body>
</html>