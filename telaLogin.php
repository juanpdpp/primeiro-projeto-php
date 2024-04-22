<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <!--- tipos de caracteres usados (dependendo do tipo, algns sites n entendem algss acentos) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--- determina o jeito que o cliente vai ver no monitor -->
    <link rel="stylesheet" href="style.css">
    <title>Login</title> <!--- titulo :) -->
</head>
<body>
        <h1>Login</h1> <!--- titulo mostrado no site, quanto maior o numero na chave, menor o titulo -->
        <form action="controller.php" method="post"> <!---get aparece no url. post, nao -->
            <label for="usuario">Usuário</label>
            <br>
            <input type="text" name="usuario" id="usuario" required> <!---CRIAR A CAIXA DE BOTAR O USUARIO -->
            <br>
            <label for="senha">Senha</label>
            <br>
            <input type="password" name="senha" id="senha" required> <!---CRIAR CAIXA DE BOTAR A SENHA -->
            <br>
            <input type="hidden" name="acao" id="acao" value="entrar">
            <br>
            <input type="submit" value="Entrar">
            <br>
            <br>
            <a href="telaCadastroPessoa.php">Cadastrar</a>
        </form>
</body>
</html>
