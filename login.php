<?php
require 'conexion.php';
require 'usuarios.php';

$usuario = $_POST['txtUsuario'];
$passwd = $_POST['txtPasswd'];

$resultado = Usuario::login($usuario, $passwd);
header('Content-Type: application/json');
echo $resultado;