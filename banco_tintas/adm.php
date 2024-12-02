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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/adm_padrão.css">
    <title>ADM | Banco de Tintas</title>
</head>
<body>
<div class="cabeçalho">
        <label for="login">ADM: <?php echo $logado ?></label>
        <a href="adm_solicitacoes.php"><button class="BtTroca">Solicitações</button></a>
        <a href="adm.php"><button class="BtTroca">Doações</button></a>
        <a href="estoque.php"><button class="BtTroca">Estoque</button></a>
    </div>
        <form class="main" action="confirmar_doação.php" method="post">

            <label for="dataEntrada">Data da doação.</label>
            <input type="date" id="dataEntrada"name="dataEntrada">
            <br>
            <label for="dataValidade">Data de validade do material.</label>
            <input type="date" id="dataValidade"name="dataValidade">
            <br><br>
            <label for="quantidade">Quantidade doada.</label><br>
            <br>
            <input type="radio" id="-1" name="quantidade" value="-1">
            <label for="-1"> Menos de 1 Litro </label><br>
            <input type="radio" id="1,5" name="quantidade" value="1,5">
            <label for="1,5">Aproximadamente 1,5 Litros</label><br>
            <input type="radio" id="2,5" name="quantidade" value="2,5">
            <label for="2,5">Aproximadamente 2,5 Litros </label><br>
            <input type="radio" id="3,6+" name="quantidade" value="3,6+">
            <label for="3,6+">A lata lacrada de 3,6 litros ou 18 litros  </label>
            <br><br>
            <label for="latas">  Quantas latas ou galões estão sendo doadas</label><br>
            <br>
            <input type="radio" id="1 latas" name="latas" value="1">
            <label for="1">1 lata</label><br>
            <input type="radio" id="2 latas" name="latas" value="2">
            <label for="2">2 latas</label><br>
            <input type="radio" id="3 latas" name="latas" value="3">
            <label for="3">3 latas</label><br>
            <br><br>
            <label for="core">Informe a cor da tinta</label><br>
            <br>
            <input type="text" id="cor" name="cor">
            <br><br>
            <label for="aplicação">Informe a indicação de aplicação da tinta.</label><br>
            <br>
            <select name="aplicação">
                <option value="">Escolha uma aplicação</option>
                <option value="Alvenaria">Alvenaria</option>
                <option value="Madeira">Madeira</option>
                <option value="Metal"> Metal </option>
            </select>
            <br><br>
            <label for="marca">Informe a marca da tinta.</label><br>
            <br>
            <input type="text" id="merca" name="marca">
            <br><br>
            <label for="linha"> Informe a linha da tinta. </label><br>
            <br>
            <input type="radio" id="Premium" name="linha" value="Premium">
            <label for="1">Premium </label><br>
            <input type="radio" id="Standart" name="linha" value="Standart">
            <label for="2">Standart</label><br>
            <input type="radio" id="Econômica" name="linha" value="Econômica">
            <label for="3">Econômica</label><br>
            <br>
            <label for="acabamento"> Informe o acabamento da tinta.</label><br>
            <br>
            <input type="radio" id="Fosco" name="acabamento" value="Fosco">
            <label for="1">Fosco</label><br>
            <input type="radio" id="Acetinado" name="acabamento" value="Acetinado">
            <label for="2">Acetinado</label><br>
            <input type="radio" id="Brilhante" name="acabamento" value="Brilhante">
            <label for="3">Brilhante</label><br>
            <br><br>
                <input type="submit" class="BtTroca" name="submit" id="submit" value="enviar">
        </form>
</body>
</html>
