function logar() {
<<<<<<< HEAD
    let user = document.getElementById('log').value;
    let passw = document.getElementById('pw').value;

    if (user == "" || passw) {
=======
    const LOG = document.getElementById('log').value;
    const PASSW = document.getElementById('pw').value;
>>>>>>> a16bb2c76ede5bd41a8b93f8b850819e89cfa428

    if (LOG === '' || PASSW === '') {
        alert('Preencha os campos vazios.');
    } else {
        alert('Login feito com sucesso!')
    }

}

function registrar() {
    const USER = document.getElementById('user');
    const EMAIL = document.getElementById('email');
    const TEL = document.getElementById('tel');
    const VAL = document.getElementById('validar');

    if (USER === '' || EMAIL === '' || TEL === '') {
        alert('Preencha os Campos vazios.');
    } else {
        alert('Cadastro feito com sucesso!');
    }
}

function rCodigo() {

}

function vCodigo() {

}