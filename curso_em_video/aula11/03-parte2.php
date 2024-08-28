<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHile</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $i = isset($_GET["ini"]) ? $_GET["ini"] : 1;
        $f = isset($_GET["fin"]) ? $_GET["fin"] : 10;
        $in = isset($_GET["inc"]) ? $_GET["inc"] : 1;

        while ($i <= $f) {
            echo $i;
           $i + $in;
        }


        ?>
        <a href="02-parte01.php">Voltar</a>
    </div>
</body>

</html>