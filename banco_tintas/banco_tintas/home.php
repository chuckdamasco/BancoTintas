<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;800&family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <title>Banco de Tintas | Home</title>
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
font-size: var(var(--fs-body));
}

.page{
max-width: 33rem;
margin: 0 auto;
}




img{
width: 100%;
height: auto;

}

header{
margin: 10rem 0 8rem;
font-family: Haettenschweiler, 'Arial Narrow Bold', sans-serif;
text-align: center;
animation: topdown 700ms;
}

header p {

color: var(--fc-secondary);
text-transform: uppercase;
line-height: 3.2rem;
letter-spacing: 3px;
margin-bottom: 1.7rem;
font-weight: 400;
font-size: 6rem;



}

main{

display: grid;
gap: 3.2rem;
animation: downtop 700ms 350ms backwards;

}

.card{

position: relative;
font-family: var(--ff-heading);
color: rgb(49, 57, 58);
}

.card img{

height: 41.6rem;
object-fit: relative; 
filter:brightness(1.2);
border-radius: 6px;
transition: all transform 200ms;

}

.card img:hover{

transform: scale(1.005);
opacity: 0.9;
cursor: pointer;
}

.card h2{

position: absolute;
bottom: 2rem;
left: 2rem;
right: 2rem;
font-size: 4rem;
font-weight: 800;
display: flex;
flex-direction: column;
gap: 2.8rem;
}

.card h2 span{

border-radius: 2rem;
background-color: var(--fc-primary) ;
font-size: var(--fs-body);
font-weight: 400;
color: var(--fc-secondary-dark);
padding: 0 1.6rem;
width: fit-content;
display: inline-flex;
align-items: center;


}


@keyframes topdown {

0%{
    opacity: 0;
    transform: translateY(0);

}

100%{
    opacity: 1;
    transform: translateY(0);

}
}

@keyframes downtop{

0%{

    opacity: 0;
    transform: translateY(15px);
}

100%{

    opacity: 1;
    transform: translaterY(0);
}
}

@media (min-width: 700px){

.page{
    max-width: 117rem;
    padding: 0 5rem;
}

main{
    grid-template-columns: 1fr 1fr;
}
}

@media (min-width: 930px) {


main{

grid-template-areas: "A B B"
"C C D";
}

main div:nth-child(1){
grid-area: A;
}

main div:nth-child(2){
grid-area: B;
}

main div:nth-child(3){
grid-area: C;
}

main div:nth-child(4){
grid-area: D;
}

}
footer{
font-size: small;
text-align: center;
position: relative;
padding: 2%;
font-family: Geneva, Verdana, sans-serif;
color: var(--fc-secondary);
};

.container {
    display: grid;
    

    gap: 20px;  /* Espaçamento entre os botões */
}

/* Estilo dos botões */
.btn {
    padding: 15px 30px;
    font-size: 18px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
   
}
   

/* Botão de Login */
.btn.login {
    background-color: var(--fc-secondary);
    color: white;
}

.btn.login:hover {
    background-color: #2980b9;
    transform: scale(1.05);
}

/* Botão de Cadastro */
.btn.cadastro {
    background-color: var(--fc-secondary);
    color: white;
}

.btn.cadastro:hover {
    background-color: #27ae60;
    transform: scale(1.05);
}
    </style>
</head>
    
<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;800&display=swap" rel="stylesheet">


<body>

<div class="page">
        <header>
            <p>Banco de Tintas</p>
        </header>

        <main>
            <div class="card" id="projeto">
                <img src="./image/BDtintas.png" alt="logotipo do projeto Banco de Tintas">
                <h2><span></span>O projeto</h2>
            </div>   

            <div class="card" id="doar">
                <img src="./image/doar.png" alt="Pessoa pintando de verde uma folha na parede">
                <h2><span></span>Doar</h2>
            </div> 

            <div class="card" id="solicitar">
                <img src="./image/solicitar.png" alt="Latas de tinta e pessoa pintando ao fundo">
                <h2><span></span>Solicitar</h2>
            </div> 

            <div class="card" id="parcerias">
                <img src="./image/parcerias.jpg" alt="Latas de tinta coloridas abertas vistas de cima">
                <h2><span></span>Parcerias</h2>
            </div>
        </div>
        <br>
        
       
        <div class="container">
            <a href="login.php"> <button class="btn login" >Login</button></a>
            <a href="formulario.php"> <button class="btn cadastro">Cadastrar</button></a>
        </div>
            
        </main>

        <footer>Projeto elaborado pelos alunos da FATEC Jundiaí</footer>
   

</body>
</html>