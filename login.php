<?php
require 'conexion.php';
require 'usuarios.php';

session_start();
if (isset($_SESSION['usuario'])) {
    header('Location:perfil.php');
} else {
    if (isset($_POST['txtUsuario']) && isset($_POST['txtPasswd'])) {
        $usuario = $_POST['txtUsuario'];
        $passwd = $_POST['txtPasswd'];
        $resultado = Usuario::login($usuario, $passwd);
        if (!$resultado) {
            header('Location:index.php?error=1');
        } else {
            $_SESSION['usuario'] = $resultado;
            header('Location:perfil.php');
        }
    } else {
        header('Location:index.php');
    }

}