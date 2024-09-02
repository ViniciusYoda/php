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
    <?php
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
        $r = wordwrap($t, 5, "<br/>\n", false);
        $r1 = wordwrap($t, 20, "<br/>\n", true);
        echo $r;
        echo $r1;
    ?>;
       
    </div>
</body>
</html>