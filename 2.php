<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ohjelmointikielet</h2>
    <ul>
        <?php

            $php = 'PHP';
            $java = 'Java';
            $perl = 'Perl';
            $jscript = 'Javascript';
            $languageArray = array($php, $java, $perl, $jscript);

            foreach ($languageArray as $language) {
                echo "<li>$language</li>";
            }

        ?>
    </ul>
</body>
</html>