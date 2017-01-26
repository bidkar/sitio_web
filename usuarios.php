<?php
require 'conexion.php';
class Usuario {
    private $datos = [
        'id' => '',
        'username' => '',
        'nombre' => '',
        'apellidos' => '',
        'email' => ''
    ];

    public static function login($username, $passwd) {
        $cnn = new Conexion();
        $sql = sprintf("select * from usuarios where username='%s' and passwd='%s'", $username, md5($passwd));
        $rst = $cnn->query($sql);
        if (!$rst) {
            return 'error en la consulta';
        } else {
            if ($rst->num_rows == 1) {
                // agregar codigo para recoger valores de usuario
            } else {
                return 'no hay registros';
            }
        }
    }

    public function __get($campo) {
        return $this->datos[$campo];
    }

    public function __set($campo, $valor) {
        $this->datos[$campo] = $valor;
    }
}

$usuario = Usuario::login('bidkar','123');