<?php
    session_start();
    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
    {
        header('Location: login.php');
    }
    $logado = $_SESSION['login'];
    $conexao=mysqli_connect("localhost", "root", "","bancotintas") or die ("Falha na conexão"); 
    $tabela = mysqli_query($conexao, "SELECT * FROM adm"); 
    $linha = mysqli_fetch_array($tabela);
    if($linha["login"]!=$logado){
        header('Location: home.php');
    }
    $tabela = mysqli_query($conexao, "SELECT * FROM doacao_estoque"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/adm_padrão.css">
    <title>Banco de Tintas | Estoque</title>
</head>
<body>
<div class="cabeçalho">
        <label for="login">ADM:<?php echo $logado ?></label>
        <a href="adm_solicitacoes.php"><button class="BtTroca">Solicitações</button></a>
        <a href="adm.php"><button class="BtTroca">Cadastrar Doação</button></a>
        <a href="estoque.php"><button class="BtTroca">Estoque</button></a>
    </div>
    <div class="solicita">
            <h1>estoque</h1>
            <div class="itens">
            <?php
                while ($linha = mysqli_fetch_array($tabela))
                {
            ?>
                    <div class="solicitação">

                        <h2>código:<?php echo $linha["codigo"] ?></h2>
                                <p>cor:<?php echo $linha["cor"] ?></p>
                                <p>quantidade:<?php echo $linha["quantidade"] ?></p>
                                <p>vencimento:<?php echo $linha["vencimento"] ?></p>
                                <p>marca:<?php echo $linha["marca"] ?></p>
                                <p>aplicação:<?php echo $linha["aplicacao"] ?></p>
                                <p>latas:<?php echo $linha["latas"] ?></p>
                                <p>acabamento:<?php echo $linha["acabamento"] ?></p>
                                <br><br> 
                                <input type="button" name="editar" value="editar"> 
                                <input type="button" name="remover" value="remover"> 
                    </div>
                    <?php  
            }
            ?>
</body>
</html>