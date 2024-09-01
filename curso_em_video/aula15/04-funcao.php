<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        function teste(&$x) {
            $x += 2;
            echo "<p>O valor de X é $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a";
    ?>
       
    </div>
</body>
</html>