document.getElementById('projeto').addEventListener('click', () => {
    alert('O projeto Banco de Tintas visa centralizar doações para ajudar quem precisa!');
});

document.getElementById('doar').addEventListener('click', () => {
    window.location.href = './php/login.php';
});

document.getElementById('solicitar').addEventListener('click', () => {
    window.location.href = './php/login.php';
});

document.getElementById('parcerias').addEventListener('click', () => {
    window.location.href = './php/parcerias.php';
});
