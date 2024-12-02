<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}
?>
<h2>Bem-vindo à página de Doação!</h2>
<a href="logout.php">Sair</a>
