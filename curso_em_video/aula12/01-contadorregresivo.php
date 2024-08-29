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
        $c = 10;
        do {
            echo "$c <br>";
            $c --;
        } while ($c >= 1);
       ?>
    </div>
</body>
</html>