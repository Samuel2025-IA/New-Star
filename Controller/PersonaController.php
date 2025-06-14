<?php
require_once "Models/Persona.php";

class PersonaController {

    public function index() {
        require_once "Views/persona/index.php";
    }

    public function guardar() {
        $tipoDoc = $_POST['tipo_doc'];
        $documento = $_POST['documento'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $rol = $_POST['roles'];
        $programa = $_POST['programa'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];

        $modelo = new Persona();
        $resultado = $modelo->registrar($tipoDoc, $documento, $nombre, $apellido, $rol, $programa, $correo, $telefono);

        if ($resultado === true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Registro exitoso',
                    text: 'La persona fue registrada correctamente',
                    confirmButtonColor: '#00994C'
                }).then(() => {
                    window.location.href = 'index.php?controller=persona&action=index';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error al registrar',
                    text: '" . $resultado . "',
                    confirmButtonColor: '#d33'
                }).then(() => {
                    window.history.back();
                });
            </script>";
        }
    }
}
