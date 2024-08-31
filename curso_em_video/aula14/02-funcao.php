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
            return $a + $b; 
        }

        
        $x = 7;
        $y = 8;
        $r = soma($x, $y);
        echo "A soma de $x + $y é igual a $r";
    ?>
       
    </div>
</body>
</html>