<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
        /*
            Comentario 
            de 
            varias 
            linhas

        */
            $atual = $_GET["aa"]; # essa linha vai pegar o ano na uRL
            echo "O ano atual é $atual e o ano anterior é " . --$atual;
        ?>
    </div>
</body>
</html>