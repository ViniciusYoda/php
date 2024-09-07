<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Formulário de Cadastro</h2>

    <form action="process.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <label for="genero">Gênero:</label>
        <select name="genero" required>
            <option value="">Selecione...</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select>

        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>
