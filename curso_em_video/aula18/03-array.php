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
        <pre>
            <table border=1><tr></tr>
    <?php
        $c = range(5, 20, 2);
        foreach($c as $v) {
            echo "<td>$v ";
        }
    ?>
            </table>
       </pre>
    </div>
</body>
</html>