<?php
if(isset($_POST['submit']))
{
    //print_r('Nome: '.$_POST['nome']);
    //print_r('<br>');
    //print_r('Email :'.$_POST['email']);
    //print_r('<br>');
    //print_r('Whatsapp :'.$_POST['whatsapp']);
    //print_r('<br>');
    //print_r('Data de nascimento :'.$_POST['data_nascimento']);
    //print_r('<br>');
    //print_r('Endereço :'.$_POST['endereco']);
    //print_r('<br>');
    

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $whatsapp = $_POST['whatsapp'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];


    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,whatsapp,data_nascimento,endereco) 
        VALUES ('$nome','$email','$senha','$whatsapp','$data_nascimento','$endereco')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Banco de Tintas | Formulário</title>
    <style>
        :root{

--ff-heading: 'Epilogue', sans-serif;
--ff-texting: 'Open sans', sans-serif;

--hue: 20;
--bg-primary: hsl(var(--hue), 22%, 20%);
--fc-primary: hsl(var(--hue), 0%, 100%);
--fc-secondary: hsl(var(--hue), 50%, 80%);
--fc-secondary-dark: hsl(var(--hue), 100%, 11%, 1);

font-size: 62.5%;
--fs-body:1.6rem;
--fs-heading: clamp(4rem, 1rem + 5vw, 5.6rem)
--fs-heading-sm: clamp(3rem, 0.5rem + 3vw, 4rem)

}
body{


font-family: var(--ff-texting);
background-color: var(--fc-primary);
color: var(--fc-primary);
font-size: var(var(--fs-body));;
}

.box {
    color: white; 
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.6); /* Transparente */
    padding: 15px;
    border-radius: 15px;
    width: 20%;
}



legend {
    border: 1px solid var(--fc-secondary); 
    padding: ;
    text-align: center;
    background-color: var(--fc-secondary); 
    border-radius: 8px;
    font-size: 26px;
}

.inputBox {
    position: relative;
}

.inputUser {
    background: none;
    border: none;
    border-bottom: 1px solid var(--fc-primary); 
    outline: none;
    color: var(--fc-primary);
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}

.labelInput {
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: 0.2s;
}

.inputUser:focus ~ .labelInput,
.inputUser:valid ~ .labelInput {
    top: -20px;
    font-size: 18px;
    color: var(--fc-secondary); 
}

#data_nascimento {
    border: none;
    padding: 3.2px;
    border-radius: 10px;
    outline: none;
    font-size: 12px;
}

.inputsub {
    background-color: var(--fc-secondary); /* Botão com cor escura */
    width: 100%;
    border: none;
    padding: 15px;
    color: var(--fc-primary); /* Cor do texto do botão */
    font-size: 22px;
    cursor: pointer;
    border-radius: 10px;
    transition: background-color 0.3s;
}

.inputsub:hover {
    background-color: var(--fc-secondary); /* Muda a cor ao passar o mouse */
}
    </style>
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
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="whatsapp" id="whatsapp" class="inputUser" required>
                    <label for="telefone" class="labelInput">Whatsapp</label>
                </div>                
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" class="inputsub" name="submit" id="submit" value="enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>