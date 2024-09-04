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
        $v= array("nome" => "Ana", "idade" => 23, "peso" => 65.5);
        foreach($v as $k => $c) {
            echo "O campo $k possui o conteúdo $c <br/>";
        }
    ?>
       </pre>
    </div>
</body>
</html>