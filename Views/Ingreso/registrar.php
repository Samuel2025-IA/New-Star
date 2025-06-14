<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Ingreso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-dark text-white">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-secondary shadow-lg">
                <div class="card-header text-center bg-success text-white">
                    <h4>Registro de Ingreso</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?controller=ingreso&action=registrar" method="POST">

                        <div class="mb-3">
                            <label for="documento" class="form-label">Documento de identidad</label>
                            <input type="text" class="form-control" name="documento" required>
                        </div>

                        <div class="mb-3">
                            <label for="casillero" class="form-label">Número de Casillero</label>
                            <input type="number" class="form-control" name="casillero" min="0">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Dejó pertenencias</label>
                            <select name="dejo_pertenencias" class="form-select">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Registrar ingreso</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
