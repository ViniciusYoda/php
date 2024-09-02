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
        $t = "Curso em Vídeo";
        $tam = strlen($t);
        echo $tam;
        $n = "   josé da silva   ";
        $novo = trim($n);
        echo $novo;
        $novo2 = ltrim($n);
        echo $novo2;
        $novo3 = rtrim($n);
        echo $novo3;
        $frase = "Eu vou estudar PHP agora";
        $cont = str_word_count($frase, 0);
        echo $cont;
        $site = "Curso em video";
        $vetor = explode(" ", $site);
        print_r($vetor);
        $nome = "Maria";
        $vetor2 = str_split($nome);
        print_r($vetor2);
        $vetor[0] = "Curso";
        $vetor[1] = "em";
        $vetor[2] = "Video";
        $texto = implode("#", $vetor);
        print_r($texto);
        $texto2 = join("#", $vetor);
        print_r($texto2);
        $letra = chr(67);
        echo "A letra de código 67 é $letra";
        $letra2 = "C";
        $cod = ord($letra2);
        print("A letra C corresponde ao código $cod");
    ?>;
       
    </div>
</body>
</html>