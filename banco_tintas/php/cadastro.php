<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$nome, $email, $senha])) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar.";
    }
}
?>