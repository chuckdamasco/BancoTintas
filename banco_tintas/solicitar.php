<?php
     session_start();
     if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
     {
         header('Location: login.php');
     }
     $logado = $_SESSION['login'];
     $teste1=false;
     $teste2=false;
    $conexao=mysqli_connect("localhost", "root", "","bancotintas") or die ("Falha na conexão"); 
    $sql = "SELECT * FROM juridica WHERE login_juridica = '$logado'";

        $result = $conexao->query($sql);
        
        if(mysqli_num_rows($result)<0){
        $teste1=true;
    } 
    $sql = "SELECT * FROM fisica WHERE login_fisica = '$logado'";

        $result = $conexao->query($sql);
        
        if(mysqli_num_rows($result)<0){
        $teste2=true;
    } 
    if($teste1==true && $teste2==true){
        header('Location: login.php?erro=1');
    } 
    $tabela = mysqli_query($conexao, "SELECT * FROM doacao_estoque"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/solicitar.css">
    <title>Banco de Tintas | Solicitar</title>
</head>
<body>
    <div class="cabeçalho">
        <a href="home.php"><img src="./image/BDtintasLogo.png" alt="logotipo do projeto Banco de Tintas"></a>
        <a href="projeto.php"><button class="BtTroca">Projeto</button></a>
        <a href="doar.html"><button class="BtTroca">Doar</button></a>
        <a href="solicitar.php"><button class="BtTroca">Solicitar</button></a>
        <a href="parceria.php"><button class="BtTroca">Parcerias</button></a>
    </div>
    <form class="tintas" action="confirmar_solicitação.php" method="post">
    <div class="solicita">
            <h1>Tintas Disponiveis</h1>
            <div class="itens">
            <?php
                while ($linha = mysqli_fetch_array($tabela))
                {
                    if($linha["quantidade"]=="-1"){
            ?>
                    <div class="solicitação">

                        <h2>Cor:<?php echo $linha["cor"] ?></h2>

                        
                        <img src="./image/tinta_generica.png" alt="lata de tinta">
                                <p>vencimento:<?php echo $linha["vencimento"] ?></p>
                                <p>aplicacao:<?php echo $linha["aplicacao"] ?></p>
                                <p>acabamento:<?php echo $linha["acabamento"] ?></p>
                                <p>quantidade:</p>
                                <select name="quantidade<?php echo $linha["codigo"] ?>">
                                    <option value="-1">Menos de 1 Litro</option>
                                </select>
                                <br><br>
                                <label for="-1"> Escolha:  </label><input type="radio" id="cod_<?php echo $linha["codigo"] ?>" name="solicitar" value="<?php echo $linha["codigo"] ?>">        
                    </div>
            <?php
                }
                if($linha["quantidade"]=="1,5"){
                    ?>
                            <div class="solicitação">

                                <h2>Cor:<?php echo $linha["cor"] ?></h2>

                                
                                <img src="./image/tinta_generica.png" alt="lata de tinta">
                                        <p>vencimento:<?php echo $linha["vencimento"] ?></p>
                                        <p>aplicacao:<?php echo $linha["aplicacao"] ?></p>
                                        <p>acabamento:<?php echo $linha["acabamento"] ?></p>
                                        <p>quantidade:</p>
                                        <select name="quantidade<?php echo $linha["codigo"] ?>">
                                            <option value="-1">Menos de 1 Litro</option>
                                            <option value="1,5">Aproximadamente 1,5 Litros</option>
                                        </select>
                                        <br><br>
                                        <label for="-1"> Escolha:  </label><input type="radio" id="cod_<?php echo $linha["codigo"] ?>" name="solicitar" value="<?php echo $linha["codigo"] ?>">
                                       
                                
                            </div>
                    <?php
                        }
                        if($linha["quantidade"]=="2,5"){
                            ?>
                                    <div class="solicitação">

                                        <h2>Cor:<?php echo $linha["cor"] ?></h2>

                                        
                                        <img src="./image/tinta_generica.png" alt="lata de tinta">
                                                <p>vencimento:<?php echo $linha["vencimento"] ?></p>
                                                <p>aplicacao:<?php echo $linha["aplicacao"] ?></p>
                                                <p>acabamento:<?php echo $linha["acabamento"] ?></p>
                                                <p>quantidade:</p>
                                                <select name="quantidade<?php echo $linha["codigo"] ?>">
                                                    <option value="-1">Menos de 1 Litro</option>
                                                    <option value="1,5">Aproximadamente 1,5 Litros</option>
                                                    <option value="2,5">Aproximadamente 2,5 Litros</option>
                                                </select>
                                                <br><br>
                                                <label for="-1"> Escolha:  </label><input type="radio" id="cod_<?php echo $linha["codigo"] ?>" name="solicitar" value="<?php echo $linha["codigo"] ?>">
                            
                                
                                    </div>
                            <?php
                                }
                                if($linha["quantidade"]=="3,6+"){
                                    ?>
                                            <div class="solicitação">

                                                <h2>Cor:<?php echo $linha["cor"] ?></h2>

                                                
                                                <img src="./image/tinta_generica.png" alt="lata de tinta">
                                                        <p>vencimento:<?php echo $linha["vencimento"] ?></p>
                                                        <p>aplicacao:<?php echo $linha["aplicacao"] ?></p>
                                                        <p>acabamento:<?php echo $linha["acabamento"] ?></p>
                                                        <p>quantidade:</p>
                                                        <select name="quantidade<?php echo $linha["codigo"] ?>">
                                                            <option value="-1">Menos de 1 Litro</option>
                                                            <option value="1,5">Aproximadamente 1,5 Litros</option>
                                                            <option value="2,5">Aproximadamente 2,5 Litros</option>
                                                            <option value="3,6+">A lata lacrada de 3,6 litros ou 18 litros </option>
                                                        </select>
                                                        <br><br>
                                                        <label for="-1"> Escolha:  </label><input type="radio" id="cod_<?php echo $linha["codigo"] ?>" name="solicitar" value="<?php echo $linha["codigo"] ?>">
                                                        
                                
                                            </div>
                                    <?php
                                        }
            }
            ?>
            </div>
            <div class="final">
            <br><br>
            <label for="dia">Dia para retirada.</label><br>
            <br>
            <select name="dia">
                <option value="Segunda">Segunda-Feira</option>
                <option value="Terça">Terça-Feira</option>
                <option value="Quarta">Quarta-Feira</option>
                <option value="Quinta"> Quinta-Feira </option>
                <option value="Sexta"> Sexta-Feira </option>
            </select>
            <br><br>
            <label for="Horario">Horário.</label><br>
            <br>
            <select name="Horario">
                <option value="8H-12H">8h-12h</option>
                <option value="13H-18H">13h-18h</option>
            </select>
            <br><br>
            <input type="submit" name="pedir" id="pedir" value="pedir">
        </div>
    </form>
</body>
</html>
<?php
    mysqli_free_result($tabela);
    mysqli_close($conexao); 
?>