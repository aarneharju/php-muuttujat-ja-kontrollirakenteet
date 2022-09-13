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
    
        function factorial($number) {
            if ($number > 1) {
                return $number * factorial($number - 1);
            } else {
                return 1;
            }
        }
        
        echo "Factorial of five is " . factorial(5);
    ?>
</body>
</html>