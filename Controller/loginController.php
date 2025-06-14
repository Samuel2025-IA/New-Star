<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "Models/usuario.php";

class LoginController {
    public function index() {
        require_once "Views/login/login.php";
    }

    public function validar() {
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

        $modelo = new Usuario();
        $resultado = $modelo->verificarUsuario($usuario, $clave);

        if ($resultado) {
            session_start();
            $_SESSION['usuario'] = $resultado['usuario'];
            $_SESSION['nombre'] = $resultado['nombre'];

           echo "<html>
<head>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Bienvenido',
                text: '" . addslashes($resultado['nombre']) . "',
                confirmButtonColor: '#00994C',
                confirmButtonText: 'Continuar'
            }).then(() => {
                window.location.href = 'index.php?controller=dashboard&action=inicio';
            });
        });
    </script>
</body>
</html>";

        }else {
    echo "<html>
    <head>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    </head>
    <body>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Ocurrió un error inesperado',
                    text: 'El nombre de usuario o contraseña no son correctos',
                    confirmButtonColor: '#00994C',
                    confirmButtonText: 'Aceptar'
                }).then(() => {
                    window.history.back();
                });
            });
        </script>
    </body>
</html>";
}

    }
}
