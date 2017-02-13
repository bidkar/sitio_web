<?php
require 'usuarios.php';
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location:index.php');
} else {
    $usuario = $_SESSION['usuario'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perfil del usuario</title>
</head>
<body>
    <table>
        <thead>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo electronico</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $usuario->username; ?></td>
                <td><?php echo $usuario->nombre; ?></td>
                <td><?php echo $usuario->apellidos; ?></td>
                <td><?php echo $usuario->email; ?></td>
            </tr>
        </tbody>
    </table>
    <footer>
        <a href="logout.php">Cerrar sesion</a>
    </footer>
</body>
</html>