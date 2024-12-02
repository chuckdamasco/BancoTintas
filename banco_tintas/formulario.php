<?php
if(isset($_POST['submit']))
{
    
    $conexao=mysqli_connect("localhost", "root", "","bancotintas") or die ("Falha na conexão"); 



    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $pessoa = $_POST['pessoa'];
    if($pessoa=='fisica'){
        $cpf = $_POST['cpf/cnpj'];
        $sql = "SELECT * FROM fisica";  
        $tabela = mysqli_query($conexao, $sql);
        $sql="INSERT INTO fisica 
            (nome, login_fisica, senha, email, cidade,cpf) 
            VALUES 
            ('$nome','$login', '$senha', '$email', '$cidade', '$cpf')";

    }else{
        $cnpj = $_POST['cpf/cnpj'];
        $tipoOrg = $_POST['tipoOrg'];
        $sql = "SELECT * FROM juridica";
        $tabela = mysqli_query($conexao, $sql);
        $sql="INSERT INTO juridica 
            (nome, login_juridica, senha, email, cidade,cnpj,tipo_de_organizacao) 
            VALUES 
            ('$nome','$login', '$senha', '$email', '$cidade', '$cnpj', '$tipoOrg')";

    }
    $tabela = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/formulario.css">
    
    <title>Banco de Tintas | Formulário</title>  
</head>
<body>
<a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="login" id="login" class="inputUser" required>
                    <label for="login" class="labelInput">Login</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>                
                <br><br>
                <div class="inputBox">
                <label for="pessoa">Pessoa fisica ou juridica?</label><br>
                <br>
                <input type="radio" id="fisica" name="pessoa" value="fisica">
                <label for="fisica"> Fisica </label><br>
                <input type="radio" id="juridica" name="pessoa" value="juridica">
                <label for="juridica">Juridica</label><br>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf/cnpj" id="cpf/cnpj" class="inputUser" required>
                    <label for="cpf/cnpj" class="labelInput">CPF/CNPJ</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="tipoOrg" id="tipoOrg" class="inputUser">
                    <label for="tipoOrg" class="labelInput">Tipo de organização(caso juridica)</label>
                </div>
                <br><br>
                <input type="submit" class="inputsub" name="submit" id="submit" value="enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>