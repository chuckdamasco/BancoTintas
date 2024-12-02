<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($senha, $user['senha'])) {
        session_start();
        $_SESSION['usuario'] = $user['nome'];
        echo "Login realizado com sucesso!";
    } else {
        echo "Email ou senha incorretos.";
    }
}
?>
