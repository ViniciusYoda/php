<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] :1;
        for ($c=1; $c <= 10; $c++) {
            $r = $c * $n;
            echo "$n * $c = $r <br>";
        }
    ?>
    <br>
    <a href="02-index.php">Voltar/a>
       
    </div>
</body>
</html>