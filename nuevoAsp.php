<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnologico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap (opcional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css"> <!-- Archivo CSS externo -->
    <link rel="stylesheet" href="css/menustyle.css"> <!-- Archivo CSS externo -->
</head>

<body>
    <!-- Sidebar (menú de navegación) -->
    <?php include 'menu.php'; ?>

    <!-- Contenido principal -->
    <div class="content" id="content">
        <h1 class="highlight-blue text-center">Nuevo Aspirante</h1>

        <!-- Formulario adaptado -->
        <div class="container mt-5">
            <h2 class="text-center highlight-blue mb-4">Datos Generales del Aspirante</h2>
            <div class="form-container">
                <form>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="apellidoPaterno" class="form-label">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellidoPaterno" placeholder="Ingresa Apellido Paterno">
                        </div>
                        <div class="col-md-4">
                            <label for="apellidoMaterno" class="form-label">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellidoMaterno" placeholder="Ingresa Apellido Materno">
                        </div>
                        <div class="col-md-4">
                            <label for="nombreAspirante" class="form-label">Nombre Aspirante</label>
                            <input type="text" class="form-control" id="nombreAspirante" placeholder="Ingresa Nombre">
                        </div>
                    </div>

                    <!-- Fila para correo electrónico y NIP generados -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Ingresa Correo Electrónico">
                        </div>
                        <div class="col-md-6">
                            <label for="nipGenerado" class="form-label">NIP Generado</label>
                            <input type="text" class="form-control" id="nipGenerado" placeholder="NIP Generado" readonly>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button onclick="location.href='recomendaciones.html'" type="button" class="btn btn-danger">Regresar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Script para manejar el colapso/expansión del menú -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
