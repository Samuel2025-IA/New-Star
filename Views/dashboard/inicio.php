<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Biblioteca SENA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>
    <div class="wrapper-page">
        <main class="container py-5">
            <h2 class="text-light text-center mb-4">Bienvenido, <span class="text-success"><?= $_SESSION['nombre'] ?? 'Invitado' ?></span></h2>

            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card dashboard-card text-white bg-success">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-user-check fa-2x mb-2"></i>
                            <h5>Ingresos hoy</h5>
                            <p class="display-6"><?= $ingresosHoy ?></p>
                            <a href="index.php?controller=ingreso&action=index" class="btn btn-outline-light btn-sm mt-2">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card dashboard-card text-white bg-info">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-lock-open fa-2x mb-2"></i>
                            <h5>Casilleros disponibles</h5>
                            <p class="display-6"><?= $casillerosDisponibles ?></p>
                            <a href="index.php?controller=casillero&action=index" class="btn btn-outline-light btn-sm mt-2">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card dashboard-card text-white bg-warning">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-users fa-2x mb-2"></i>
                            <h5>Total de personas</h5>
                            <p class="display-6"><?= $personas ?></p>
                            <a href="index.php?controller=persona&action=index" class="btn btn-outline-light btn-sm mt-2">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card dashboard-card text-white bg-primary">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-database fa-2x mb-2"></i>
                            <h5>Total ingresos registrados</h5>
                            <p class="display-6"><?= $totalIngresos ?></p>
                            <a href="index.php?controller=ingreso&action=index" class="btn btn-outline-light btn-sm mt-2">Ver más</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card dashboard-card text-white bg-danger">
                        <div class="card-body text-center">
                            <i class="fa-solid fa-door-open fa-2x mb-2"></i>
                            <h5>Salidas hoy</h5>
                            <p class="display-6"><?= $salidasHoy ?></p>
                            <a href="index.php?controller=salida&action=index" class="btn btn-outline-light btn-sm mt-2">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="text-center text-light py-3 bg-dark small mt-auto">
            © Samuel Zapata - Control de Ingreso Biblioteca SENA 2025
        </footer>
    </div>
</body>
</html>
