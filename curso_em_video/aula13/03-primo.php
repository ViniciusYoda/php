<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOWhile</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
    <?php
        $n=isset($_GET["num"])?$_GET["num"]:1;
        $t=0;
        echo "Analisando os múltipos de $n ... </br><br/>";
        echo "Valores múltiplos:";
        for($c=1; $c <= $n; $c++){
          if($n%$c == 0){
            echo "$c ";  
            $t++;
          }
        }
        echo "<br/>Total de múltiplos: $t<br/>";
        if ($t > 2){
          echo "RESULTADO: $n <h2><span class='foco'>NÃO É PRIMO</h2></span><br/>";
        }
        if($t == 2) {
          echo "RESULTADO:$n  <h2><span class='foco'>É PRIMO</h2></span>";
        }
    ?>
       <a href="03-index.php">Voltar</a>
    </div>
</body>
</html>