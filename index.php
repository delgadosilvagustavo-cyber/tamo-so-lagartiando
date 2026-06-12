<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Gerar TXT com JS</title>
</head>
<body>
    <h1>Conteúdo do Arquivo:</h1>

    <form action="/processar_cadastro" method="POST">
        
        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="conteudo1" name="nome" placeholder="Digite seu nome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="conteudo2" name="email" placeholder="seuemail@exemplo.com" required><br><br>

        <label for="senha">Senha:</label><br>
        <input type="password" id="conteudo3" name="senha" minlength="6" required><br><br>

        <label for="nascimento">Data de Nascimento:</label><br>
        <input type="date" id="conteudo4" name="nascimento"><br><br>

        <label>Gênero:</label><br>
        <input type="radio" id="conteudo5" name="genero" value="masculino">
        <label for="masc">Masculino</label>
        <input type="radio" id="conteudo6" name="genero" value="feminino">
        <label for="fem">Feminino</label><br><br>

        </form>

    <textarea id="conteudo7" rows="4" cols="30">
Digite um Texto de exemplo e salve ...
    </textarea><br><br>

    <button id="btnSalvar">Salvar.txt</button>

    <script src="sketch.js"></script>
</body>
</html>