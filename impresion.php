<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato de Solicitud de Ficha para Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap (opcional) -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <!-- Archivos CSS externos -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menustyle.css">
</head>

    <style>
    /* Estilos personalizados para impresión */
    @media print {
        body {
            font-family: Arial, sans-serif;
        }

        .no-print {
            display: none;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #333 !important;
        }
    }

    .highlight-blue {
        color: #2779B6;
    }

    .table-bordered th,
    .table-bordered td {
        border: 2px solid #2779B6;
    }

    .print-container {
        margin-top: 20px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    </style>
</head>

<body>
    <?php include 'menu.php'; ?>

    <div class="container content form-container mt-5" id="content">
        <div class="print-container">
            <h2 class="highlight-blue">IMPRIME FORMATO SOLICITUD DE FICHA PARA EXAMEN DE SELECCIÓN</h2>
            <h3>Datos Generales del Aspirante</h3>

            <!-- Tabla para los datos del aspirante -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre Aspirante</th>
                        <th>No. de Solicitud</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- Aquí puedes sustituir las variables por valores dinámicos -->
                        <td>
                            <?php 
                            // Ejemplo de datos simulados
                            $nombre_aspirante = "Juan Pérez";
                            echo $nombre_aspirante;
                            ?>
                        </td>
                        <td>
                            <?php 
                            // Ejemplo de número de solicitud simulado
                            $no_solicitud = "123456";
                            echo $no_solicitud;
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Más secciones según lo necesites -->
            <p>Esta es la solicitud oficial de ficha para el examen de selección. Por favor, asegúrate de revisar los
                datos antes de imprimir.</p>
        </div>

        <!-- Botón de impresión -->
        <div class="text-center no-print">
            <button class="btn btn-primary mt-4" onclick="window.print()">Imprimir Formato</button>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>