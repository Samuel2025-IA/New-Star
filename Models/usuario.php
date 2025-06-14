<?php
require_once "config/database.php";

class Usuario {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function registrar($nombre, $usuario, $correo, $telefono, $clave) {
        $claveHash = hash('sha256', $clave);
        $sql = "INSERT INTO usuario (nombre, usuario, correo, telefono, clave) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$nombre, $usuario, $correo, $telefono, $claveHash]);
    }

    public function verificarUsuario($usuario, $clave) {
        $sql = "SELECT * FROM usuario WHERE usuario = :usuario";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $fila = $stmt->fetch(PDO::FETCH_ASSOC);
            $clave_hash = hash('sha256', $clave);
            if ($clave_hash === $fila['clave']) {
                return $fila;
            }
        }
        return false;
    }

    public function restablecerClave($correo, $nueva_clave) {
        $sql = "SELECT * FROM usuario WHERE correo = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$correo]);

        if ($stmt->rowCount() === 1) {
            $hash = hash('sha256', $nueva_clave);
            $update = $this->conn->prepare("UPDATE usuario SET clave = ? WHERE correo = ?");
            return $update->execute([$hash, $correo]);
        }
        return false;
    }
}
