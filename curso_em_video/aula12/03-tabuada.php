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
        $tab=isset($_GET["num"])?$_GET["num"]:0;
        $c=1;
        do{
            echo "$tab x $c = ".($tab*$c)."</br>";
            $c++;
        }while ($c<=10);
    ?>
       <a href="03-index.php">Voltar</a>
    </div>
</body>
</html>