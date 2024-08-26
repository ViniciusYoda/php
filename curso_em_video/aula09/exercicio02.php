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
            $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
            $i = date("Y") - $a;
            echo "Voce nasceu em $a e terá $i anos <br/>";
            if($i < 16) {
                $tipoVoto = "não volta";
            }
            elseif (($i >= 17 && $i < 18) || ($i>65)) {
                    $tipoVoto = "voto opcional";
            } 
            else {
                $tipoVoto = "voto obrigatorio";
            }

            echo "Com essa idade seu tipo de voto é $tipoVoto";
        ?>
    </div>
</body>

</html>