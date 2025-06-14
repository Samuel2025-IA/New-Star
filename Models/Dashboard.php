<?php
require_once "config/database.php";

class Dashboard {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function contarIngresosHoy() {
        $sql = "SELECT COUNT(*) AS total FROM ingreso WHERE DATE(fecha_ingreso) = CURDATE()";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function contarCasillerosDisponibles() {
        $sql = "SELECT COUNT(*) AS total FROM casillero WHERE estado = 'disponible'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function contarPersonas() {
        $sql = "SELECT COUNT(*) AS total FROM persona";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function contarTotalIngresos() {
        $sql = "SELECT COUNT(*) AS total FROM ingreso";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function contarSalidasHoy() {
        $sql = "SELECT COUNT(*) AS total FROM salida WHERE DATE(fecha_salida) = CURDATE()";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }
}
