<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrar Persona</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@5/dark.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-dark text-white">
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card bg-secondary shadow-lg">
        <div class="card-header bg-warning text-dark text-center">
          <h4>Registro de Persona</h4>
        </div>
        <div class="card-body">
          <form action="index.php?controller=persona&action=guardar" method="POST">
            <div class="row mb-3">
              <div class="col-md-4">
                <label for="tipo_doc" class="form-label">Tipo de Documento</label>
                <select name="tipo_doc" class="form-select" required>
                  <option value="">- Seleccionar -</option>
                  <option value="CC">Cédula de Ciudadanía</option>
                  <option value="TI">Tarjeta de Identidad</option>
                </select>
              </div>
             
              <div class="col-md-4">
                <label for="documento" class="form-label">Documento</label>
                <input type="text" name="documento" class="form-control" required>
              </div>
               <div class="col-md-4">
                <label for="genero" class="form-label">Genero</label>
                <select name="genero" class="form-select" required>
                  <option value="">- Seleccionar -</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
              </div>
               <div class="col-md-4">
                <label for="jornada" class="form-label">Jornada</label>
                <select name="jornada" class="form-select" required>
                  <option value="">- Seleccionar -</option>
                  <option value="Masculino">Mañana</option>
                  <option value="Femenino">Tarde</option>
                  <option value="Otro">Noche</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" class="form-control" required>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-6">
                <label for="roles" class="form-label">Rol</label>
                <select name="roles" class="form-select" required>
                  <option value="">- Seleccionar -</option>
                  <option value="Aprendiz">Aprendiz</option>
                  <option value="Instructor">Instructor</option>
                  <option value="Visitante">Visitante</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="programa" class="form-label">Programa de Formación</label>
                <select name="programa" class="form-select" required>
                  <option value="">- Seleccionar -</option>
                  <option value="Análisis y Desarrollo de Software">Análisis y Desarrollo de Software</option>
                  <option value="Desarrollo de Medios Gráficos Visuales">Desarrollo de Medios Gráficos Visuales</option>
                  <option value="Gestión Administrativa">Gestión Administrativa</option>
                  <option value="Contabilidad y Finanzas">Contabilidad y Finanzas</option>
                  <option value="Gestión del Talento Humano">Gestión del Talento Humano</option>
                  <option value="Producción Agropecuaria">Producción Agropecuaria</option>
                  <option value="Cocina">Cocina</option>
                  <option value="Enfermería">Enfermería</option>
                  <option value="Logística Empresarial">Logística Empresarial</option>
                  <option value="Construcción de Edificaciones">Construcción de Edificaciones</option>
                  <option value="Mecánica Industrial">Mecánica Industrial</option>
                  <option value="Electricidad Residencial">Electricidad Residencial</option>
                  <option value="Gestión de Mercados">Gestión de Mercados</option>
                  <option value="Programación de Software">Programación de Software</option>
                  <option value="Diseño e Integración Multimedia">Diseño e Integración Multimedia</option>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-md-6">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" name="correo" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" class="form-control" required>
              </div>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-warning text-dark">Registrar Persona</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
