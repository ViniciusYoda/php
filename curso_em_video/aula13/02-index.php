<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <form method="get" action="02-tabuada.php">
           <select name="num" id="num">
           <?php
                for ($o=1; $o <= 10; $o++) {
                    echo "<option>$o</option>";
                }
            ?>
           </select> 
           <input type="submit" value="Calcular" class="botao">
        </form>
   
       
    </div>
</body>
</html>