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
        function soma ($a, $b) {
            $s = $a + $b;
            echo "<p>A soma vale $s</p>";
        }

        soma(2, 2);
        soma(2, 3);
        soma(3, 4);
        soma(4, 5);
        soma(5, 6);
        soma(6, 7);
        $x = 7;
        $y = 8;
        soma($x, $y);
    ?>
       
    </div>
</body>
</html>