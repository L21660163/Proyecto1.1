<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnologico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/styles.css"> <!-- Archivo CSS externo -->
    <link rel="stylesheet" href="css/menustyle.css"> <!-- Archivo CSS externo -->
    <style>
        /* Estilos adicionales */
        .highlight-orange {
            color: #FF8000;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .text-orange {
            color: #FF8000;
        }

        .left-align-orange {
            color: #FF8000;
            font-size: 15px;
            font-weight: bold;
            text-align: left;
        }

        .spaced-text {
            margin-top: 1cm;
            font-size: 16px;
            text-align: justify;
        }

        .steps {
            font-size: 16px;
            margin-top: 20px;
        }

        .steps-title {
            font-weight: bold;
            margin-top: 20px;
        }

        .requirements-title {
            font-weight: bold;
            margin-top: 1cm;
        }

        .requirements {
            font-size: 16px;
            margin-top: 10px;
            text-align: justify;
        }

        .note {
            font-weight: bold;
            color: #FF8000;
            margin-top: 20px;
        }

        /* Estilo para los textos en mayúsculas y en azul */
        .uppercase-blue {
            color: #003366; /* Azul similar al del Tecnológico de México */
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <!-- Sidebar (menú de navegación) -->
    <?php include 'menu.php'; ?>

    <!-- Contenido principal -->
    <div class="content" id="content">
        <!-- Título centrado: BIENVENIDO(A) ASPIRANTE -->
        <h1 class="highlight-orange">BIENVENIDO(A) ASPIRANTE</h1>

        <!-- Texto centrado: RECOMENDACIONES -->
        <h2 class="highlight-orange">RECOMENDACIONES</h2>

        <!-- Texto alineado a la izquierda: SALUDOS -->
        <p class="left-align-orange">SALUDOS:</p>

        <!-- Texto adicional -->
        <p class="spaced-text text-primary-custom">
            El INSTITUTO TECNOLÓGICO DE MATEHUALA te da la más cordial bienvenida. En este momento eres ASPIRANTE a ingresar a este INSTITUTO.
            <br><br>
            Antes de comenzar a llenar la solicitud, te recomendamos que leas cuidadosamente los siguientes requisitos, te ayudarán en el proceso de registro de la solicitud. Es importante detenerse a leer estas recomendaciones antes de continuar, lo cual te facilitará el trabajo de llenado e impresión de la solicitud. Te sugerimos que te pongas cómodo y dispuesto a capturar esta solicitud. El tiempo estimado de captura será de aproximadamente 30 minutos.
        </p>

        <!-- Proceso de llenado de solicitud -->
        <h3 class="steps-title uppercase-blue">EL PROCESO DE LLENADO DE ESTA SOLICITUD CONSTA DE TRES PASOS:</h3>

        <p class="steps text-primary-custom">
            <strong>Primero:</strong> Llenar la solicitud de ficha de examen de selección, que consiste en llenar el formulario con datos básicamente de tipo general y escolar del aspirante.
        </p>
        <p class="steps text-primary-custom">
            <strong>Segundo:</strong> Llenar el formulario de datos socioeconómicos del aspirante. Este formulario requiere información tal como, ingresos económicos de tus padres y de tu familia, nivel de estudios, ocupación de tus padres, dependencia económica, datos de la vivienda, entre otros.
        </p>
        <p class="steps text-primary-custom">
            <strong>Tercero:</strong> Imprimir la solicitud en la opción de FORMATO IMPRESOS del menú principal que se te presenta arriba. Llevar la solicitud impresa al departamento de control escolar junto con documentos comprobatorios necesarios (fotografías, constancias, copias, entre otros). Entregarla para validación y comprobación de tus datos. Al final, deberás hacer tu pago de derecho de examen de admisión y posteriormente te será entregada una ficha de examen para pasar al llenado de la hoja de registro de CENEVAL.
        </p>

        <!-- Requisitos adicionales, colocados a 1 cm de distancia del texto anterior -->
        <h3 class="requirements-title uppercase-blue">LOS REQUISITOS PARA CAPTURAR ESTA SOLICITUD:</h3>

        <p class="requirements text-primary-custom">
            Disponer de la información necesaria y requerida por la solicitud y el formato de datos socioeconómicos tal como:
            <br><br>
            Apellido del aspirante y nombre(s), CURP completa, fecha de nacimiento del aspirante, nacionalidad, sexo, opciones de carrera (seleccionar primera opción y segunda opción en caso de no ser aceptado en la primera opción), entidad de la preparatoria de procedencia y nombre de la preparatoria de procedencia, promedio general, año de egreso de bachillerato, domicilio, estado civil, zona de procedencia del aspirante, además de los datos generales de tus padres, entre otros.
            <br><br>
            Con respecto de los datos socioeconómicos, te pedimos captures datos tales como nivel de estudios de tus padres, ¿con quién vives?, ¿tipo de vivienda?, ¿ocupación de tus padres?, ¿ingresos económicos de tus padres?, ¿características de tu vivienda? así como datos de persona y domicilio en caso de emergencia.
        </p>

        <!-- Nota importante -->
        <p class="note">
            NOTA: DEBERÁS LLENAR EL MÁXIMO DE DATOS QUE SE TE PIDEN, EL PROGRAMA NO TE DEJARÁ SEGUIR SI NO LO HACES ASÍ.
        </p>

        <!-- Información adicional -->
        <p class="requirements text-primary-custom">
            Con estos datos en mano te pedimos tener paciencia y capturar lo más tranquilo posible para que termines tu proceso de registro de manera exitosa. Ahora bien, si crees que te faltaron datos, captura los datos con los que cuentes en este momento, guarda los cambios y los actualizas más tarde.
        </p>

        <!-- Requisitos de equipo y software en mayúsculas -->
        <h3 class="requirements-title uppercase-blue">NECESIDADES DE COMPUTADORA Y PROGRAMAS INSTALADOS EN TU PC:</h3>

        <p class="requirements text-primary-custom">
            Si ya estás aquí es porque estás frente a una PC con conexión a internet, ahora sólo basta saber si tienes el programa adecuado para imprimir esta solicitud.
            <br><br>
            Al término de llenado de tu solicitud está la opción de IMPRIMIR solicitud, deberás seleccionar esta opción e intentar imprimir los datos capturados. Si todo ha salido bien deberás mandar lo que aparece en pantalla que será la solicitud de aspirante a la impresora y con ello habrás terminado de capturar.
        </p>

        <p class="requirements text-primary-custom">
            Cuando ya termines puedes CERRAR SESIÓN.
        </p>

        <!-- Cierre -->
        <p class="requirements text-primary-custom">
            Bueno, ahora ponte cómodo y a capturar la solicitud.
        </p>

        <p class="requirements text-primary-custom">
            Saludos nuevamente y gracias por tu comprensión.
        </p>

        <div class="mt-4 text-center">
            <!-- Botones de acción -->
            <button class="btn btn-primary me-3">Continuar</button>
            <!-- Botón para regresar a la página anterior -->
            <button class="btn btn-danger" onclick="window.history.back();">Regresar</button>
        </div>
    </div>

</body>

</html>
