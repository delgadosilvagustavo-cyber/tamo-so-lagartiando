<?php 
require("conexao.php");

if (isset($_POST)) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];
    $genero = $_POST['genero'];
    $observacao = $_POST['observacao'];

    $query = "INSERT INTO usuarios (nome, email, senha, nascimento, genero, observacao)
                 VALUES ('$nome', '$email', '$Senha', '$nascimento', '$genero', '$observacao')";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    header("Location: sucessobd.php?criado=sucesso");
}