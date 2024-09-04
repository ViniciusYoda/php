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
        <pre>
    <?php
        $v = array (
            3 => 5,
            2 => 9,
            0 => 8,
            1=> 7
        );
        unset($v[0]);
        print_r($v);
    ?>
       </pre>
    </div>
</body>
</html>