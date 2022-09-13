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
    
        $arvosana = rand(1,3);

        if ($arvosana === 3) {
            echo "Kiitettävä";
        } elseif ($arvosana === 2) {
            echo "Hyvä";
        } else {
            echo "Tyydyttävä";
        }
    
    ?>
</body>
</html>