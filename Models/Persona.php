<?php
require_once "Config/database.php";

class Persona {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function registrar($tipoDoc, $documento, $nombre, $apellido, $rol, $programa, $correo, $telefono) {
        try {
            $sql = "INSERT INTO persona (tipo_doc, documento, nombre, apellido, roles, programa, correo, telefono)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$tipoDoc, $documento, $nombre, $apellido, $rol, $programa, $correo, $telefono]);
            return true;
        } catch (PDOException $e) {
            return "Error en la base de datos: " . $e->getMessage();
        }
    }
}
