<?php
require_once "Models/usuario.php";

class UsuarioController {
    public function crear() {
        require_once "Views/usuario/crear.php";
    }

    public function registrar() {
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $clave = $_POST['clave'];
        $confirmar = $_POST['confirmar'];

        if ($clave !== $confirmar) {
            echo "<script>
                Swal.fire({ icon: 'error', title: 'Error', text: 'Las contraseñas no coinciden' })
                .then(() => window.history.back());
            </script>";
            return;
        }

        $modelo = new Usuario();
        $modelo->registrar($nombre, $usuario, $correo, $telefono, $clave);

        echo "<script>
            Swal.fire({ icon: 'success', title: 'Registro exitoso', text: 'Cuenta creada correctamente' })
            .then(() => window.location.href = 'index.php?controller=login&action=index');
        </script>";
    }

    public function recuperar() {
        require_once "Views/usuario/recuperar.php";
    }

    public function actualizarClave() {
        $correo = $_POST['correo'];
        $nueva_clave = $_POST['nueva_clave'];

        $modelo = new Usuario();
        $actualizado = $modelo->restablecerClave($correo, $nueva_clave);

        if ($actualizado) {
            echo "<script>
                Swal.fire({ icon: 'success', title: 'Actualizado', text: 'Contraseña cambiada correctamente' })
                .then(() => window.location.href = 'index.php?controller=login&action=index');
            </script>";
        } else {
            echo "<script>
                Swal.fire({ icon: 'error', title: 'Correo no registrado', text: 'No se encontró ningún usuario con ese correo' })
                .then(() => window.history.back());
            </script>";
        }
    }
}
