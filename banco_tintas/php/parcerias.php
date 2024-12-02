<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO parceiros (nome, email, mensagem) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nome, $email, $mensagem]);
}

$sql = "SELECT * FROM parceiros";
$stmt = $conn->query($sql);
$parceiros = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcerias</title>
</head>
<body>
    <h2>Parceiros</h2>
    <ul>
        <?php foreach ($parceiros as $parceiro): ?>
            <li><?php echo $parceiro['nome']; ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Seja um parceiro</h3>
    <form method="POST">
        <input type="text" name="nome" placeholder="Seu nome" required><br>
        <input type="email" name="email" placeholder="Seu email" required><br>
        <textarea name="mensagem" placeholder="Mensagem" required></textarea><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
