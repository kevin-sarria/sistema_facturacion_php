<?php

namespace Model;

use Model\ActiveRecord;

class Usuario extends ActiveRecord {

    protected static $tabla = 'usuarios';
    protected static $columnasDB = [ 'id', 'nombre', 'correo', 'password', 'admin', 'banned', 'user', 'token' ];

    public function __construct( $args = [] ) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->admin = $args['admin'] ?? 0;
        $this->banned = $args['banned'] ?? 0;
        $this->user = $args['user'] ?? 0;
        $this->token = $args['token'] ?? '';
    }

    public function validarLogin() {
        if( !$this->correo ) {
            self::$alertas['error'][] = 'El email del usuario es obligatorio';
        }
        if( !filter_var($this->correo, FILTER_VALIDATE_EMAIL) ) {
            self::$alertas['error'][] = 'Email no válido';
        }
        if( !$this->password) {
            self::$alertas['error'][] = 'La contraseña no puede ir vacia';
        }
        return self::$alertas;
    }

    public function crearSuperUser() {
        if( !$this->correo ) {
            self::$alertas['error'][] = 'El email del usuario es obligatorio';
        }
        if( !filter_var($this->correo, FILTER_VALIDATE_EMAIL) ) {
            self::$alertas['error'][] = 'Email no válido';
        }
        if( !$this->password) {
            self::$alertas['error'][] = 'La contraseña no puede ir vacia';
        }

        return self::$alertas;
    }

    public function hashPassword(): void {
        $this->password = password_hash( $this->password, PASSWORD_BCRYPT );
    }

}

?>