<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
       <?php
        $c = 10;
        while ($c >= 1) {
            echo $c . "<br>";
            $c--;
        }
       ?>
    </div>
</body>
</html>