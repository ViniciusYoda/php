<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
       <form method="get" action="02-parte2.php">
        <?php
        $n = 1;
        while($n <= 5) {

            echo "Valor $n: <input type='number' name='v$n' id='v1' max='100' min='0' value='0'/> <br>";
            $n++;
        }
        ?>
        <input type="submit" value="Enviar" class="botao">
       </form>
    </div>
</body>
</html>