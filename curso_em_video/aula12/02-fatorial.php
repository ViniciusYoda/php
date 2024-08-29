<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOWhile</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
       <?php
        $v = isset($_GET["val"]) ? $_GET["val"] : 1;
        echo "<h1>Calculadno o fatorial de $v</h1>";
        $c = $v;
        $fat = 1;
        do {
            $fat = $fat * $c;
            $c --;
        } while ($c >= 1);
        echo "<h2>$v! = $fat <br>";
       ?>
       <a href="02-index.php">Voltar</a>
    </div>
</body>
</html>