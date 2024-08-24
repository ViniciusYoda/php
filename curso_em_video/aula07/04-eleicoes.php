<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacoes</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $ano = $_GET["an"];
            $idade = 2024 - $ano;
            echo "Quam nasceu em $ano tem idade de $idade <br/>";
            $tipo = ($idade>=18 && $idade<65) ?"Obrigatorio":"Não Obrigatorio";
            echo "E dessa forma seu voto é $tipo";
        ?>
    </div>
</body>
</html>