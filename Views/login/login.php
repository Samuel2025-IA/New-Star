<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8" />
    <title>Login - Control de Ingreso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- libreria de boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- libreria de iconos persona,candado,Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
     <!-- ruta para que se mecargue los estilos -->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- libreria de icono al ingresar mal un dato -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-6 col-lg-5">
            <div class="card p-4 bg-white">
                <div class="card-body">
                    <h3 class="text-center text-success mb-4">Control de Ingreso</h3>

                    <!-- FORMULARIO FUNCIONAL -->
                    <form method="post" action="index.php?controller=login&action=validar">

                        <!-- Usuario -->
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
                        </div>
                          <!-- Contraseña -->
                        <div class="input-group mb-3">
                             <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                             <input type="password" class="form-control" name="clave" placeholder="Contraseña" required>
                        </div>

                        <!-- Recordarme -->
                        <div class="form-check mb-3 text-start">
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Recordarme</label>
                        </div>

                        <!-- Botón SENA -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-sena btn-custom">Iniciar Sesión</button>
                        </div>
                    </form>

                    <!-- Redes sociales -->
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-google btn-custom"><i class="fab fa-google me-2"></i>Login with Google</a>
                        <a href="#" class="btn btn-facebook btn-custom"><i class="fab fa-facebook-f me-2"></i>Login with Facebook</a>
                    </div>

                    <!-- Links adicionales -->
                    <div class="text-center mt-3">
                       <p class="small mb-1">¿Olvidaste tu contraseña? <a href="index.php?controller=usuario&action=recuperar">Recupérala</a></p> 
                        <!-- <p class="small">¿No tienes cuenta? <a href="index.php?controller=usuario&action=crear">Regístrate aquí</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
