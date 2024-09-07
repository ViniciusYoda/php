<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Resultado do Cadastro</h2>

    <div class="message">
    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = htmlspecialchars(trim($_POST['nome']));
        $idade = filter_var(trim($_POST['idade']), FILTER_VALIDATE_INT);
        $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
        $senha = htmlspecialchars(trim($_POST['senha']));
        $genero = htmlspecialchars(trim($_POST['genero']));

        $erros = [];

        if (empty($nome)) {
            $erros[] = "O nome é obrigatório.";
        }

        if ($idade === false || $idade <= 0) {
            $erros[] = "A idade deve ser um número positivo.";
        }

        if ($email === false) {
            $erros[] = "O email é inválido.";
        }

        if (strlen($senha) < 6) {
            $erros[] = "A senha deve ter pelo menos 6 caracteres.";
        }

        if (empty($genero)) {
            $erros[] = "O gênero é obrigatório.";
        }

        if (count($erros) > 0) {
            foreach ($erros as $erro) {
                echo "<p>$erro</p>";
            }
        } else {
            echo "<p class='success'>Cadastro realizado com sucesso!</p>";
            echo "<p>Nome: $nome</p>";
            echo "<p>Idade: $idade</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Gênero: $genero</p>";
        }
    } else {
        echo "<p>Método inválido.</p>";
    }
    ?>
    </div>
</div>

</body>
</html>
