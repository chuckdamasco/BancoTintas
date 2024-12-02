<?php
    $conexao=mysqli_connect("localhost", "root", "","bancotintas") or die ("Falha na conexão"); 

    session_start();
     if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
     {
         header('Location: login.php');
     }
     $logado = $_SESSION['login'];

    $sql = "SELECT * FROM doacao_estoque";
    $tabela = mysqli_query($conexao, $sql);

    $login = $logado;
    
    $cor = $_POST["cor"];

    $quantidade = $_POST["quantidade"];
    
    $dataValidade = $_POST["dataValidade"];
    
    $linha = $_POST["linha"];

    $aplicação = $_POST["aplicação"];
   
    $marca = $_POST["marca"];
    
    $acabamento = $_POST["acabamento"];
    
    $dataEntrada = $_POST["dataEntrada"];
    
    $latas = $_POST["latas"];
    

    $sql="INSERT INTO doacao_estoque 
            (login, codigo, cor, quantidade, vencimento,linha,aplicacao,marca,acabamento,data_entrega,latas) 
            VALUES 
            ('$login','$codigo', '$cor', '$quantidade', '$dataValidade', '$linha', '$aplicação', '$marca', '$acabamento', '$dataEntrada', '$latas')";

    $tabela = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    header("Location: adm.php");
?>