<?php
class Usuario {
    private $datos = [
        'id' => '',
        'username' => '',
        'nombre' => '',
        'apellidos' => '',
        'email' => ''
    ];

    public static function login($username, $passwd) {
        $datos = ['data' => ['login'=>'']];
        $cnn = new Conexion();
        $sql = sprintf("select * from usuarios where username='%s' and passwd='%s'", $username, md5($passwd));
        $rst = $cnn->query($sql); //$rst = mysqli_result
        $cnn->close();
        if (!$rst) {
            $datos['data']['login'] = 'fail';
        } else {
            if ($rst->num_rows == 1) {
                $usuario = new Usuario();
                $r = $rst->fetch_assoc(); // $r = array asociativo del resultset
                $usuario->id = $r['id'];
                $usuario->username = $r['username'];
                $usuario->nombre = $r['nombre'];
                $usuario->apellidos = $r['apellidos'];
                $usuario->email = $r['email'];

                $datos['data']['login'] = true;
                $datos['data']['usuario'] = $usuario->datos;
            } else {
                $datos['data']['login'] = false;
            }
        }
        return json_encode($datos, JSON_PRETTY_PRINT);
    }

    public function __get($campo) {
        return $this->datos[$campo];
    }

    public function __set($campo, $valor) {
        $this->datos[$campo] = $valor;
    }
}

// $usuario = Usuario::login('bidkar','123');
// echo $usuario;