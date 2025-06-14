<?php
require_once "Models/Ingreso.php";

class IngresoController {

    public function index() {
        require_once "Views/Ingreso/registrar.php";
    }

    public function registrar() {
        $documento = $_POST['documento'];
        $casillero = $_POST['casillero'];
        $dejoPertenencias = $_POST['dejo_pertenencias'];

        $modelo = new Ingreso();
        $resultado = $modelo->guardar($documento, $casillero, $dejoPertenencias);

        if ($resultado === true) {
            echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Ingreso registrado',
                    text: 'El ingreso se ha registrado correctamente',
                    confirmButtonColor: '#00994C'
                }).then(() => {
                    window.location.href = 'index.php?controller=ingreso&action=index';
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error al registrar ingreso',
                    text: '" . $resultado . "',
                    confirmButtonColor: '#d33'
                }).then(() => {
                    window.history.back();
                });
            </script>";
        }
    }
}
