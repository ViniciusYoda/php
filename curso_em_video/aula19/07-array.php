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
    <?php
        $v = array("A", "J", "M", "X", "K");
        echo "O vetor tem " . count($v) . " elementos <br/>";
        print_r($v);
        var_dump($v);
        $v[] = "O";
        array_push($v, "B");
        array_pop($v);
        array_unshift($v, "O");
        array_shift($v);
        print_r($v);
        $n = array(3,5,8,2);
        print_r($n);
        $o = sort($n);
        print_r($o);
        $r = rsort($n);
        print_r($r);
    ?>
       </pre>
    </div>
</body>
</html>