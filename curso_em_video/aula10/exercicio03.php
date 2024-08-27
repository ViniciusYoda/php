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
            $e = isset($_GET["estado"]) ? $_GET["estado"] : 0;
            switch ($e) {
                case 1:
                    $r = "Estado no Nordeste";
                    break;
                case 2:
                    $r = "Estado no Norte";
                    break;
                case 3:
                    $r = "Estado no Centro-Oeste";
                    break;
                case 4:
                    $r = "Estado no Sudeste";
                    break;
                case 5:
                    $r = "Estado no Sul";
                    break;
                default:
                    echo "estado invalido";
            }
            echo "Voce está no $r";

        ?>
        <br>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>

</html>