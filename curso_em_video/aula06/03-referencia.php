<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencia</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = &$a;
            $b += 5;
            echo "A variavel A vale $a";
            echo "<br/>A variavel B vale $b";
        ?>
    </div>
</body>
</html>