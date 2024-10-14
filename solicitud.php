<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnologico</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap (opcional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <!-- Archivos CSS externos -->
    <link rel="stylesheet" href="css/styles.css"> <!-- Archivo CSS externo -->
    <link rel="stylesheet" href="css/menustyle.css"> <!-- Archivo CSS externo -->
</head>

<body>
    <!-- Sidebar (menú de navegación) -->
    <?php include 'menu.php'; ?>

    <!-- Contenido principal -->
    <div class="content p-4" id="content">
        <div class="container">
            <h1 class="text-center my-4">Formulario de Aspirante</h1>
            <form>
                <!-- Campos anteriores -->
                <div class="row">
                    <div class="col-md-4">
                        <label for="apellidoPaterno" class="header-label">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apellidoPaterno" placeholder="Ingresa Apellido Paterno" required>
                    </div>
                    <div class="col-md-4">
                        <label for="apellidoMaterno" class="header-label">Apellido Materno</label>
                        <input type="text" class="form-control" id="apellidoMaterno" placeholder="Ingresa Apellido Materno" required>
                    </div>
                    <div class="col-md-4">
                        <label for="nombreAspirante" class="header-label">Nombre Aspirante</label>
                        <input type="text" class="form-control" id="nombreAspirante" placeholder="Ingresa Nombre" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="fechaNacimiento" class="header-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fechaNacimiento" required>
                    </div>
                    <div class="col-md-4">
                        <label for="genero" class="header-label">Género</label>
                        <select class="form-control" id="genero" required>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="nacionalidad" class="header-label">Nacionalidad</label>
                        <select class="form-control" id="nacionalidad" required>
                            <option value="Mexicana">Mexicana</option>
                            <option value="Extranjera">Extranjera</option>
                        </select>
                        <input type="text" class="form-control mt-2" id="nacionalidadEspecifica" placeholder="Especifique si es extranjera" style="display: none;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label for="curp" class="header-label">CURP</label>
                        <input type="text" class="form-control" id="curp" placeholder="Ingresa CURP" required>
                    </div>
                    <a href=""></a>
                </div>

                <div class="row">
                    <h4 class="text-center">Carreras en Orden de Preferencia</h4>
                    <div class="col-md-6">
                        <label for="opcion1" class="header-label">Opción 1</label>
                        <select class="form-control" id="opcion1" required>
                            <option>-- Seleccione Carrera --</option>
                            <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
                            <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                            <option value="Ingeniería Civil">Ingeniería Civil</option>
                            <!-- Agregar más opciones según sea necesario -->
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="opcion2" class="header-label">Opción 2</label>
                        <select class="form-control" id="opcion2" required>
                            <option>-- Seleccione Carrera --</option>
                            <option value="Ingeniería en Sistemas Computacionales">Ingeniería en Sistemas Computacionales</option>
                            <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                            <option value="Ingeniería Civil">Ingeniería Civil</option>
                            <!-- Agregar más opciones según sea necesario -->
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="entidadProcedencia" class="header-label">Entidad Federativa de Procedencia</label>
                        <select class="form-control" id="entidadProcedencia" required>
                            <option>Aguascalientes</option>
                            <option>Ciudad de México</option>
                            <option>Jalisco</option>
                            <!-- Agregar más opciones -->
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="municipioProcedencia" class="header-label">Municipio de Procedencia</label>
                        <select class="form-control" id="municipioProcedencia" required>
                            <!-- Opciones del municipio que dependen de la entidad -->
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="escuelaProcedencia" class="header-label">Escuela de Procedencia</label>
                        <select class="form-control" id="escuelaProcedencia" required>
                            <!-- Opciones según el municipio -->
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="promedio" class="header-label">Promedio General (De 60 a 100)</label>
                        <input type="number" class="form-control" id="promedio" min="60" max="100" placeholder="Ingresa tu promedio" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="fechaEgreso" class="header-label">Fecha de Egreso de la Preparatoria</label>
                        <input type="date" class="form-control" id="fechaEgreso" required>
                    </div>
                </div>

                <!-- Sección Domicilio Actual -->
                <h2 class="text-center mt-4">Domicilio Actual</h2>
                <div class="row">
                    <div class="col-md-12">
                        <label for="domicilio" class="header-label">Calle con No. exterior y/o interior</label>
                        <input type="text" class="form-control" id="domicilio" placeholder="Ingresa tu domicilio" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="estado" class="header-label">Estado</label>
                        <select class="form-control" id="estado" required>
                            <option>Aguascalientes</option>
                            <option>Ciudad de México</option>
                            <option>Jalisco</option>
                            <!-- Agregar más opciones -->
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="municipio" class="header-label">Municipio</label>
                        <input type="text" class="form-control" id="municipio" placeholder="Ingresa tu municipio" required>
                    </div>
                    <div class="col-md-4">
                        <label for="codigoPostal" class="header-label">Código Postal</label>
                        <input type="text" class="form-control" id="codigoPostal" placeholder="Ingresa tu código postal" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="colonia" class="header-label">Colonia/Localidad</label>
                        <input type="text" class="form-control" id="colonia" placeholder="Ingresa tu colonia" required>
                    </div>
                    <div class="col-md-6">
                        <label for="telefono" class="header-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" placeholder="Ingresa tu teléfono" required>
                    </div>
                </div>

                <!-- Sección Adicional -->
                <h2 class="text-center mt-4">Información Adicional</h2>
                <div class="row">
                    <div class="col-md-4">
                        <label for="estadoCivil" class="header-label">Estado Civil</label>
                        <select class="form-control" id="estadoCivil" required>
                            <option value="Soltero(a)">Soltero(a)</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <!-- Agregar más opciones -->
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="header-label">Capacidad Diferente</label>
                        <div class="input-group">
                            <input type="radio" id="capacidadDiferenteSi" name="capacidadDiferente" value="Si Tengo"> Si Tengo
                            <input type="radio" id="capacidadDiferenteNo" name="capacidadDiferente" value="No Tengo" checked> No Tengo
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="zonaProcedencia" class="header-label">Zona de Procedencia</label>
                        <select class="form-control" id="zonaProcedencia" required>
                            <option>Indígena</option>
                            <option>Rural</option>
                            <option>Urbano Marginado</option>
                            <option>Urbano</option>
                        </select>
                        <input type="text" class="form-control mt-2" id="especifiqueIndigena" placeholder="Especifique Indígena (si aplica)" style="display: none;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="header-label">¿Tu familia pertenece al programa OPORTUNIDADES?</label>
                        <div class="input-group">
                            <input type="radio" id="programaOportunidadesSi" name="programaOportunidades" value="Si"> Si Pertenece
                            <input type="radio" id="programaOportunidadesNo" name="programaOportunidades" value="No" checked> No Pertenece
                        </div>
                    </div>
                </div>

                <!-- Sección Información de los Padres -->
                <h2 class="text-center mt-4">Información de los Padres</h2>
                <div class="row">
                    <div class="col-md-6">
                        <label for="nombrePadre" class="header-label">Nombre del Padre</label>
                        <input type="text" class="form-control" id="nombrePadre" placeholder="Ingresa el nombre del padre">
                    </div>
                    <div class="col-md-3">
                        <label for="apellidoPaternoPadre" class="header-label">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apellidoPaternoPadre" placeholder="Ingresa el apellido paterno del padre">
                    </div>
                    <div class="col-md-3">
                        <label for="apellidoMaternoPadre" class="header-label">Apellido Materno</label>
                        <input type="text" class="form-control" id="apellidoMaternoPadre" placeholder="Ingresa el apellido materno del padre">
                    </div>
                    <div class="col-md-3">
                        <label for="vivePadre" class="header-label">¿Vive?</label>
                        <div class="input-group">
                            <input type="radio" id="vivePadreSi" name="vivePadre" value="Si"> Si Vive
                            <input type="radio" id="vivePadreNo" name="vivePadre" value="No"> No Vive
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="nombreMadre" class="header-label">Nombre de la Madre</label>
                        <input type="text" class="form-control" id="nombreMadre" placeholder="Ingresa el nombre de la madre">
                    </div>
                    <div class="col-md-3">
                        <label for="apellidoPaternoMadre" class="header-label">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apellidoPaternoMadre" placeholder="Ingresa el apellido paterno de la madre">
                    </div>
                    <div class="col-md-3">
                        <label for="apellidoMaternoMadre" class="header-label">Apellido Materno</label>
                        <input type="text" class="form-control" id="apellidoMaternoMadre" placeholder="Ingresa el apellido materno de la madre">
                    </div>
                    <div class="col-md-3">
                        <label for="viveMadre" class="header-label">¿Vive?</label>
                        <div class="input-group">
                            <input type="radio" id="viveMadreSi" name="viveMadre" value="Si"> Si Vive
                            <input type="radio" id="viveMadreNo" name="viveMadre" value="No"> No Vive
                        </div>
                    </div>
                </div>

                <!-- Botones de Guardar y Cancelar -->
                <div class="row my-4">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-danger w-100">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <!-- Script para manejar el colapso/expansión del menú (si lo tienes implementado en script.js) -->
    <script src="script.js"></script>
    <!-- Bootstrap Bundle con Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
