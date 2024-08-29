<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoWhile</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
       <form method="get" action="03-tabuada.php">
       <label for="numero">Escolha um número:</label>
              Número: <select name="num">
            <?php
                $i=1;
                do {
                    echo "<option value = $i>$i</option >";
                    $i++;
                }while ($i<=10);
            ?>
        </select>
        
        <input type="submit" value="Tabuada" class="botao">
       </form>
    </div>
</body>
</html>