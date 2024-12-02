<?php
if(isset($_POST['pedir']))
{
    session_start();
    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
     {
         header('Location: login.php');
     }
    $logado = $_SESSION['login'];
    $juridica=false;
    $fisica=false;
    $conexao=mysqli_connect("localhost", "root", "","bancotintas") or die ("Falha na conexão"); 
    $sql = "SELECT * FROM juridica WHERE login_juridica = '$logado'";

        $result = $conexao->query($sql);
        
        if(mysqli_num_rows($result)==1){
        $juridica=true;
    } 
    $sql = "SELECT * FROM fisica WHERE login_fisica = '$logado'";

        $result = $conexao->query($sql);
        
        if(mysqli_num_rows($result)==1){
        $fisica=true;
    } 
    $sql = "SELECT * FROM solicita";  
    $tabela = mysqli_query($conexao, $sql);

    $dia = $_POST['dia'];
    $Horario = $_POST['Horario'];
    $codigo = $_POST['solicitar'];
    $quantidade = $_POST["quantidade".$codigo];

    if($juridica==true){
        $login = $logado;
        $sql="INSERT INTO solicita 
        (login_juridica, codigo, data_retirada, horario,quantidade) 
        VALUES 
        ('$login','$codigo' ,'$dia', '$Horario', '$quantidade')";

    }
    if($fisica==true){
        $login = $logado;
        $sql="INSERT INTO solicita 
        (login_fisica, codigo, data_retirada, horario,quantidade) 
        VALUES 
        ('$login','$codigo' ,'$dia', '$Horario', '$quantidade')";

    }
    $tabela = mysqli_query($conexao, $sql);

    mysqli_close($conexao);
    header("Location: home.php");
}
?>
