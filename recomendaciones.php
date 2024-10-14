<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menustyle.css"> <!-- Archivo CSS externo -->
</head>

<body>
    <!-- Sidebar (menú de navegación) -->
    <?php include 'menu.php'; ?>

    <!-- Contenido principal -->
    <div class="container content mt-5" id="content">
        <h1 class="highlight-orange text-center">Bienvenido(a) Nuevo Aspirante</h1>

        <h2 class="highlight-orange mt-4 text-center">Recomendaciones</h2>

        <h5 class="highlight-orange">Saludos:</h5>

        <p class="text-primary-custom">
            El INSTITUTO TECNOLÓGICO DE MATEHUALA te da la más cordial bienvenida. En este momento eres ASPIRANTE a
            ingresar a este INSTITUTO.
        </p>

        <p class="text-primary-custom">
            Antes de comenzar a llenar la solicitud, te recomendamos que leas cuidadosamente los siguientes
            requisitos, te ayudarán en el proceso de registro de la solicitud. Es importante detenerse a leer estas
            recomendaciones antes de continuar, lo cual te facilitará el trabajo de llenado e impresión de la
            solicitud. Te sugerimos te pongas cómodo y dispuesto a capturar esta solicitud, el tiempo estimado de
            captura será de aproximadamente 30 minutos.
        </p>

        <p class="text-primary-custom">
            Antes de llenar la solicitud debes de contar con un número de solicitud asignado por este sistema o
            proporcionado por personal de ventanilla del departamento de control escolar si acudiste personalmente;
            de igual forma debes contar con un NIP para ingresar al sistema. Si eres nuevo, entraste con número de
            solicitud 0 y con NIP 0.
        </p>

        <p class="text-primary-custom">
            Para contar con este número debes pulsar en el <span class="color-red">botón de continuar</span> y
            capturar los datos iniciales como son el apellido paterno, materno y nombre de aspirante. El sistema te
            mostrará una ventana de alerta que te indica tu número de solicitud y un NIP generado; te recomendamos
            que los anotes y los tengas a la mano, con ellos podrás ingresar nuevamente.
        </p>

        <p class="text-primary-custom">
            Cuando ya termines, presiona regresar, con ello podrás entrar al sistema y comenzar como aspirante ya
            registrado para capturar la solicitud completamente.
        </p>

        <div class="mt-4 text-center">
            <!-- Botones de acción -->
            <button onclick="location.href='nuevoAsp.php'" class="btn btn-custom me-3">Continuar</button>
            <button class="btn btn-custom">Salir</button>
        </div>
    </div>

    <!-- Script para manejar el colapso/expansión del menú -->
    <script src="script.js" ></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
