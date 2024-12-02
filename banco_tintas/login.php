<?php
    if (isset($_GET['erro'])) {
        $erro = $_GET['erro'];
    } else {
        $erro = 0;
    }
    if ($erro == 1) {
        $msg = "Login e/ou Senha invalido(s).";
    } else {
        if ($erro == 2) {
            $msg = "Digite Login e Senha.";
        } else {
            $msg = "";
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Banco de Tintas | Login</title>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="main">
        <h1>Login</h1>
        <form action="teste_login.php" method="POST">
        <?php
	    echo "<p><font color='red'>".$msg."</font></p>";
        ?>
            <input type="text" name="login" placeholder="Login">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <br><br>
            <a href="formulario.php"><input class="inputSubmit" type="button" name="cadastro" value="Criar Cadastro"></a>
        </form>
    </div>
</body>
</html>