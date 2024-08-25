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
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
            $ano = isset($_GET["ano"])?$_GET["ano"]:"[não informado]";
            $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[não informado]";
            $idade = date("Y") - $ano;
            echo "$nome tem $idade anos e é $sexo.";
        ?>
    </div>
</body>
</html>