// alert('Hola UDO');

function login() {
    var username = document.getElementById('txtUsuario').value;
    var password = document.getElementById('txtPasswd').value;
    var recordar = document.getElementById('remember').value;
    alert('Usuario: ' + username + ', Contraseña: ' + password + ', Recordar: ' + recordar);
}