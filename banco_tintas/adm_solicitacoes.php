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
    $tabela = mysqli_query($conexao, "SELECT * FROM solicita"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/adm_padrão.css">
    <title>ADM - Solicitações</title>
</head>
<body>
<div class="cabeçalho">
        <label for="login">ADM:<?php echo $logado ?></label>
        <a href="adm_solicitacoes.php"><button class="BtTroca">Solicitações</button></a>
        <a href="adm.php"><button class="BtTroca">Doações</button></a>
        <a href="estoque.php"><button class="BtTroca">Estoque</button></a>
    </div>
    <form class="tintas" action="confirmar_solicitação.php" method="post">
    <div class="solicita">
            <h1>Solicitações</h1>
            <div class="itens">
            <?php
                while ($linha = mysqli_fetch_array($tabela))
                {
                    if($linha["login_juridica"]==NULL){
            ?>
                    <div class="solicitação">

                        <h2>usuário:<?php echo $linha["login_fisica"] ?></h2>
                                <p>vencimento:<?php echo $linha["codigo"] ?></p>
                                <p>aplicação:<?php echo $linha["data_retirada"] ?></p>
                                <p>acabamento:<?php echo $linha["horario"] ?></p>
                                <p>quantidade:<?php echo $linha["quantidade"] ?></p>
                                <br><br> 
                                <input type="button" name="entregue" value="entregue"> 
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="solicitação">

                        <h2>usuário:<?php echo $linha["login_juridica"] ?></h2>
                                <p>código:<?php echo $linha["codigo"] ?></p>
                                <p>dia de busca:<?php echo $linha["data_retirada"] ?></p>
                                <p>horário:<?php echo $linha["horario"] ?></p>
                                <p>quantidade:<?php echo $linha["quantidade"] ?></p>
                                <br><br>
                                <input type="button" name="entregue" value="entregue"> 
                    </div>
                    <?php
                }
                
            }
            ?>
</body>
</html>