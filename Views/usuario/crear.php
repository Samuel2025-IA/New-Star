<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Persona</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-success text-white text-center">
                    <h4>Registro de Persona</h4>
                </div>
                <div class="card-body">
                   <form action="index.php?controller=usuario&action=registrar" method="POST">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label">Nombre completo</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="documento" class="form-label">Documento</label>
                                <input type="text" name="documento" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="correo" class="form-label">Correo electrónico</label>
                                <input type="email" name="correo" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" name="telefono" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="roles" class="form-label">Rol</label>
                                <select name="roles" class="form-select" required>
                                    <option value="Aprendiz">Aprendiz</option>
                                    <option value="Instructor">Instructor</option>
                                    <option value="Visitante">Visitante</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="genero" class="form-label">Género</label>
                                <select name="genero" class="form-select" required>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="jornada" class="form-label">Jornada</label>
                                <input type="text" name="jornada" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="programa" class="form-label">Programa</label>
                            <input type="text" name="programa" class="form-control">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
