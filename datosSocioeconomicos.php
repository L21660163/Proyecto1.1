<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap (opcional) -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <!-- Archivos CSS externos -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/menustyle.css">
</head>

<body>
    <?php include 'menu.php'; ?>

    <div class="container content form-container mt-5" id="content">
        <form>
            <h2 class="highlight-blue">Datos Socioeconómicos</h2>
            <div class="row">
                <div class="col-md-4">
                    <label for="apellido-paterno" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apellido-paterno">
                </div>
                <div class="col-md-4">
                    <label for="apellido-materno" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="apellido-materno">
                </div>
                <div class="col-md-4">
                    <label for="nombre-aspirante" class="form-label">Nombre Aspirante</label>
                    <input type="text" class="form-control" id="nombre-aspirante">
                </div>
            </div>

            <h4 class="mt-4 highlight-blue">Nivel Máximo de Estudios Alcanzado por tus Padres</h4>
            <div class="row">
                <div class="col-md-6">
                    <label for="padre-estudios" class="form-label">Padre</label>
                    <select class="form-control" id="padre-estudios">
                        <option>No terminó la Primaria</option>
                        <option>Terminó la Primaria</option>
                        <option>Tiene alguna capacitación técnica después de la Primaria</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="madre-estudios" class="form-label">Madre</label>
                    <select class="form-control" id="madre-estudios">
                        <option>No lo sé</option>
                        <option>No sabe leer ni escribir</option>
                        <option>Terminó la Primaria</option>
                    </select>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="con-quien-vives" class="form-label">¿Con quién vives actualmente?</label>
                    <select class="form-control" id="con-quien-vives">
                        <option>Padre y Madre</option>
                        <option>Padre</option>
                        <option>Madre</option>
                        <option>Hermanos</option>
                    </select>
                </div>

                <h2 class="highlight-blue">Ingresos Familiares Mensuales</h2>
                <div class="row">
                    <div class="col-md-4">
                        <label for="ingreso-padre" class="form-label">Padre</label>
                        <input type="number" class="form-control" id="ingreso-padre" oninput="calcularTotalIngresos()"
                            value="0">
                    </div>
                    <div class="col-md-4">
                        <label for="ingreso-madre" class="form-label">Madre</label>
                        <input type="number" class="form-control" id="ingreso-madre" oninput="calcularTotalIngresos()"
                            value="0">
                    </div>
                    <div class="col-md-4">
                        <label for="ingreso-hermanos" class="form-label">Hermanos</label>
                        <input type="number" class="form-control" id="ingreso-hermanos"
                            oninput="calcularTotalIngresos()" value="0">
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                        <label for="ingreso-propios" class="form-label">Propios</label>
                        <input type="number" class="form-control" id="ingreso-propios" oninput="calcularTotalIngresos()"
                            value="0">
                    </div>
                    <div class="col-md-4">
                        <label for="ingreso-otros" class="form-label">Otros</label>
                        <input type="number" class="form-control" id="ingreso-otros" oninput="calcularTotalIngresos()"
                            value="0">
                    </div>
                    <div class="col-md-4">
                        <label for="total-ingresos" class="form-label">Total de Ingresos</label>
                        <input type="text" class="form-control" id="total-ingresos" readonly>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="ocupacion-padre" class="form-label">Ocupación del Padre</label>
                    <select class="form-control" id="ocupacion-padre">
                        <option>No lo sé</option>
                        <option>Trabaja</option>
                        <option>Desempleado</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="ocupacion-madre" class="form-label">Ocupación de la Madre</label>
                    <select class="form-control" id="ocupacion-madre">
                        <option>No lo sé</option>
                        <option>Trabaja</option>
                        <option>Desempleada</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="ocupacion-madre" class="form-label">De quien dependes economicamente</label>
                    <select class="form-control" id="ocupacion-madre">
                        <option>Padre y Madre</option>
                        <option>Padre</option>
                        <option>Madre</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="ocupacion-madre" class="form-label">La casa donde vives es:</label>
                    <select class="form-control" id="ocupacion-madre">
                        <option>Propia</option>
                        <option>Rentada</option>
                        <option>Prestada</option>
                        <option>Se esta pagando</option>
                        <option>Otro</option>
                    </select>
                </div>
            </div>

            <!-- Campos adicionales -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="cuartos-casa" class="form-label">¿Cuántos cuartos tiene la casa?</label>
                    <select class="form-control" id="cuartos-casa">
                        <option>Tres</option>
                        <option>Cuatro</option>
                        <option>Cinco</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="personas-viven" class="form-label">¿Cuántas personas viven en la casa?</label>
                    <select class="form-control" id="personas-viven">
                        <option>Cinco</option>
                        <option>Seis</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="personas-viven" class="form-label">¿Cuántas personas incluyéndote a ti, dependen
                        económicamente del principal apoyo o sustento? </label>
                    <select class="form-control" id="personas-viven">
                        <option>Uno</option>
                        <option>Dos</option>
                        <option>Tres</option>
                        <option>Cuatro</option>
                        <option>Cinco</option>
                        <option>Seis</option>
                        <option>Siete</option>
                        <option>Ocho</option>
                        <option>Nueve</option>
                        <option>Mas de nueve</option>
                    </select>
                </div>
            </div>

            <div class="row mt-4">
                <h2 class="highlight-blue">Datos de emergencia</h2>

                <div class="col-md-6">
                    <label for="tipo-sangre" class="form-label">Tipo de Sangre</label>
                    <input type="text" class="form-control" id="tipo-sangre">
                </div>

                <div class="col-md-6">
                    <label for="contacto-emergencia" class="form-label">En caso de emergencia, ¿con quién podemos
                        comunicar?</label>
                    <input type="text" class="form-control" id="contacto-emergencia">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="codigo-postal" class="form-label">Código Postal</label>
                    <input type="text" class="form-control" id="codigo-postal">
                </div>

                <div class="col-md-6">
                    <label for="calle" class="form-label">Calle con No. exterior y/o interior</label>
                    <input type="text" class="form-control" id="calle">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="colonia" class="form-label">Colonia/Localidad</label>
                    <input type="text" class="form-control" id="colonia">
                </div>

                <div class="col-md-6">
                    <label for="municipio" class="form-label">Municipio</label>
                    <input type="text" class="form-control" id="municipio">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-control" id="estado">
                        <option>Aguascalientes</option>
                        <option>Baja California</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6">
                    <label for="lugar-trabajo" class="form-label">Lugar de Trabajo</label>
                    <input type="text" class="form-control" id="lugar-trabajo">
                </div>

                <div class="col-md-6">
                    <label for="telefono-emergencia" class="form-label">Teléfono de Emergencia</label>
                    <input type="text" class="form-control" id="telefono-emergencia">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Enviar</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>