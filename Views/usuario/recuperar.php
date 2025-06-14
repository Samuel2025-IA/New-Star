<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Recuperar contraseña</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- libreria de icono al ingresar mal un dato -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="assets/css/recuperar.css">
</head>
<body>
    <div class="wrapper-page">
        <main class="d-flex justify-content-center align-items-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg bg-dark text-white p-4 rounded-4">
                    <h3 class="text-center mb-4">Recuperación de contraseña</h3>
                    <form method="post" action="index.php?controller=usuario&action=actualizarClave">
                        <div class="form-floating mb-3">
                            <input class="form-control" type="email" name="correo" id="correo" placeholder="Correo electrónico" required>
                            <label for="correo">Correo electrónico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="password" name="nueva_clave" id="nueva_clave" placeholder="Nueva contraseña" required>
                            <label for="nueva_clave">Nueva contraseña</label>
                        </div>
                        <div class="d-grid mb-2">
                            <button type="submit" class="btn btn-sena btn-lg">Restablecer contraseña</button>
                        </div>
                        <div class="text-center mt-2">
                            <a class="small text-light" href="index.php?controller=login&action=index">Volver al login</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer class="py-4 bg-dark text-white text-center small">
            © Samuel Zapata - Proyecto SENA 2025
        </footer>
    </div>
</body>
</html>
