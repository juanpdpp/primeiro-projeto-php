<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <?php require 'menu.html'; ?>
    <h1>Cadastro de Usuario</h1>
    <form action="controller.php" method="post">
        <label for="cadastroConta">Nome</label>
        <br>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="senha">Senha</label>
        <br>
        <input type="password" name="senha" id="senha" required>
        <br>
        <label for="idade">Idade</label>
        <br>
        <input type="number" name="idade" id="idade" required>
        <br>
        <label for="sexo">Sexo</label>
        <br>
        <select name="sexo" id="sexo">
            <option value="">Selecione...</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <br>
        <br>
        <input type="hidden" name="acao" id="acao" value="cadastroPessoa"> 
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>