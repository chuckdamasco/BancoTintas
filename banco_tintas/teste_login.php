<?php

session_start();

if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
{
    $conexao=mysqli_connect("localhost", "root", "","bancotintas") or die ("Falha na conexão"); 

    $login = $_POST['login'];
    $senha = $_POST['senha'];


    $sql = "SELECT * FROM fisica WHERE login_fisica = '$login' and senha = '$senha'";

    $result = $conexao->query($sql);


    if(mysqli_num_rows($result)<1)
    {
        $sql = "SELECT * FROM juridica WHERE login_juridica = '$login' and senha = '$senha'";

        $result = $conexao->query($sql);
        
        if(mysqli_num_rows($result)<1)
        {
            $sql = "SELECT * FROM adm WHERE login = '$login' and senha = '$senha'";

            $result = $conexao->query($sql);
            
            if(mysqli_num_rows($result)<1)
            {
                unset($_SESSION['login']);
                unset($_SESSION['senha']);
                header('Location: login.php?erro=2');
            }
            else
            {
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
                header('Location: adm.php');
            }
        }
        else
        {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('Location: solicitar.php');
        }
    }
    else
    {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        header('Location: solicitar.php');
    }

}

else{
    header('Location: login.php');
}
?>