<?php

require_once 'Config/database.php'; // Asegúrate de tener una clase Conexion.php

class Ingreso {

    private $db;

    public function __construct() {
       $db = new Database();
$this->db = $db->connect();
 // Asegúrate de tener una clase Conexion.php
    }

    public function guardar($documento, $casillero, $dejoPertenencias) {
        try {
            // 1. Verificar si la persona existe
            $sqlPersona = "SELECT id FROM persona WHERE documento = ?";
            $stmtPersona = $this->db->prepare($sqlPersona);
            $stmtPersona->execute([$documento]);

            if ($stmtPersona->rowCount() === 0) {
                return "El documento no está registrado.";
            }

            $persona = $stmtPersona->fetch(PDO::FETCH_ASSOC);
            $personaId = $persona['id'];

            // 2. Verificar si ya tiene un ingreso sin salida
            $sqlCheck = "SELECT id FROM ingreso WHERE persona_id = ? AND id NOT IN (SELECT ingreso_id FROM salida)";
            $stmtCheck = $this->db->prepare($sqlCheck);
            $stmtCheck->execute([$personaId]);

            if ($stmtCheck->rowCount() > 0) {
                return "Esta persona ya tiene un ingreso activo.";
            }

            // 3. Verificar si el casillero está ocupado
            if ($dejoPertenencias && $casillero > 0) {
                $sqlCasillero = "SELECT id FROM ingreso WHERE numero_casillero = ? AND id NOT IN (SELECT ingreso_id FROM salida)";
                $stmtCas = $this->db->prepare($sqlCasillero);
                $stmtCas->execute([$casillero]);
                if ($stmtCas->rowCount() > 0) {
                    return "El casillero ya está ocupado.";
                }
            }

            // 4. Insertar ingreso
            $sqlInsert = "INSERT INTO ingreso (persona_id, fecha_ingreso, numero_casillero, dejo_pertenencias)
                          VALUES (?, NOW(), ?, ?)";
            $stmtInsert = $this->db->prepare($sqlInsert);
            $stmtInsert->execute([$personaId, $casillero, $dejoPertenencias]);

            // 5. Marcar casillero ocupado si aplica
            if ($dejoPertenencias && $casillero > 0) {
                $sqlUpdate = "UPDATE casillero SET estado = 'ocupado', fecha_ocupado = NOW(), persona_id = ? WHERE numero = ?";
                $stmtUpdate = $this->db->prepare($sqlUpdate);
                $stmtUpdate->execute([$personaId, $casillero]);
            }

            return true;

        } catch (PDOException $e) {
            return "Error en la base de datos: " . $e->getMessage();
        }
    }
}
