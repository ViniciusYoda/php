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
        $nome = "Gustavo Guanabara";
        $nome2 = strtolower($nome);
        echo "Seu nome é ". $nome2;
        $nome3 = strtoupper($nome);
        echo "Seu nome é " . $nome3;
        print("Seu nome é ". ucfirst($nome));
        print("Seu nome é ". ucwords($nome));
        print(strrev($nome));
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase, "PHP");
        echo "A string foi encontrada na posição $pos";
        $pos1 = stripos($frase, "php");
        print("Encontrado na posição $pos1");
        $frase2 = "Estpu aprendendo PHP no Curso em Video de PHP";
        $cont = substr_count($frase, "PHP");
        print("PHP encontrado $cont vezes");
        $site = "Curso em Video";
        $sub = substr($site, 0,5);
        echo "$sub ";
        $nome4 = "Guanabara";
        $novo = str_pad($nome4,  30, "", STR_PAD_RIGHT);
        print("Meu professor $novo é lindo");
        $txt = str_repeat("Php", 5);
        print("O texto ferado fou $txt");
        $frase3 = "Gosto de estudar Matemática!!";
        $novafrase = str_replace("Matemática", "PHP", $frase3);
        print($novafrase);
    ?>;
       
    </div>
</body>
</html>