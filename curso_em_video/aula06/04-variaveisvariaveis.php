<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis de Variaveis</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $x = "abc";
            $$x = "def";
            echo "O conteúdo da variavel X é $x";
            echo "<br/>A variavel criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>