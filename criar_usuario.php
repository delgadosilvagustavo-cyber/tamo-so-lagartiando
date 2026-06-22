<?php
require 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';
    $nascimento = $_POST['nascimento'] ?? null;
    $genero = $_POST['genero'] ?? '';
    $observacao = trim($_POST['observacao'] ?? '');

    if ($nome === '' || $email === '' || $senha === '' || $genero === '') {
        header('Location: index.php?error=missing');
        exit;
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    try {
        $query = 'INSERT INTO usuarios (nome, email, senha, nascimento, genero, observacao) '
            . 'VALUES (:nome, :email, :senha, :nascimento, :genero, :observacao)';

        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $senhaHash,
            ':nascimento' => $nascimento,
            ':genero' => $genero,
            ':observacao' => $observacao,
        ]);

        header('Location: sucessobd.php?criado=sucesso');
        exit;
    } catch (PDOException $e) {
        echo 'Erro ao gravar no banco de dados: ' . htmlspecialchars($e->getMessage());
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
