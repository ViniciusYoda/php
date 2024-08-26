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
            $n1 = isset($_GET["nota1"]) ? $_GET["nota1"] : "não informado";
            $n2 = isset($_GET["nota2"]) ? $_GET["nota2"] : "não informado";
            $m = ($n1 + $n2) / 2;
            echo "A sua média é $m <br/>";
            if($m < 5) {
                $estado = "reprovado";
            }
            elseif ($m >= 5 && $m < 7) {
                    $estado = "recuperação";
            } 
            else {
                $estado = "aprovado";
            }

            echo "E você está $estado";
            
        ?>
        <a href="exercicio03.html">voltar</a>
    </div>
</body>

</html>