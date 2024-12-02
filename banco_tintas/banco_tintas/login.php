<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
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
    body {
        font-family: var(--ff-texting);
        background-color: var(--fc-primary-dark); 
        color: var(--bg-primary); 
        font-size: var(--fs-body);
    }

    div {
        max-width: 33rem;
        margin: 0 auto;
        background-color: var(--fc-secondary); 
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 80px;
        border-radius: 15px;
        color: var(--fc-primary); 
    }
    input {
        padding: 15px;
        border: 1px;
        outline: none;
        font-size: 15px;
        background-color: var(--fc-secondary-dark); ;
        color: var(--fc-secondary); 
        border-radius: 8px;
        margin-bottom: 10px;
        width: 100%;
        border: 4px outset;
    }

    .inputSubmit {
        
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        
        font-size: 15px;
        cursor: pointer;
        transition: background-color 0.3s;
        background-color: var(--fc-secondary-dark    );
    color: var(--fc-secondary);
    }

    .inputSubmit:hover {
        background-color: var(--fc-secondary);
    }
</style>


</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="teste_login.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>