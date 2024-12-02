<?php
    session_start();
    print_r($_SESSION);
    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
    {
        header('Location: login.php');
    }
    $logado = $_SESSION['login'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Tintas | Sistema</title>
</head>
<body>
    <h1>Sistema acessado!</h1>
</body>
</html>