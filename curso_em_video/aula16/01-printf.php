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
        $p = "Leite";
        $pr = 4.5;
        echo "O $p custa R$ " . number_format($pr, 2);
        printf ("O %s custa R$ %.2f", $p, $pr);
    ?>;
       
    </div>
</body>
</html>