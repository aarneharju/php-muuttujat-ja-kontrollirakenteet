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

    $luku = 8;

    echo "Arvo on nyt $luku.<br>";
    echo "Lisää 2. Arvo on nyt ".($luku += 2).".<br>";
    echo "Vähennä 4. Arvo on nyt ".($luku -= 4).".<br>";
    echo "Kerro 5:llä. Arvo on nyt ".($luku *= 5).".<br>";
    echo "Jaa 3:lla. Arvo on nyt ".($luku /= 3).".<br>";
    echo "Inkrementoi (lisää) arvoa yhdellä. Arvo on nyt ".++$luku.".<br>";
    echo "Dekrementoi (vähennä) arvoa yhdellä. Arvo on nyt ".--$luku.".<br>";

    ?>
</body>
</html>