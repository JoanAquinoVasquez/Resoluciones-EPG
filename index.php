<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Texto</title>
</head>
<body>
    <h2>Modificar Texto</h2>
    
    <form action="procesar.php" method="post">
        <p>
            <input type="radio" id="opcion1" name="cantidad_personas" value="1" checked>
            <label for="opcion1">1 Persona</label>
        </p>
        <p>
            <input type="radio" id="opcion2" name="cantidad_personas" value="2">
            <label for="opcion2">2 Personas</label>
        </p>

        <label for="nombre_persona1">Nombre Persona 1:</label>
        <input type="text" id="nombre_persona1" name="nombre_persona1" required><br>

        <label for="oficio1_persona1">N° de Oficio Persona 1:</label>
        <input type="text" id="oficio1_persona1" name="oficio1_persona1" required><br>

        <label for="fecha_persona1">Fecha Persona 1:</label>
        <input type="date" id="fecha_persona1" name="fecha_persona1" required><br>

        <label for="nombre_docente">Nombre del Docente:</label>
        <input type="text" id="nombre_docente" name="nombre_docente" required><br>

        <label for="fecha_examen_persona1">Fecha del Examen Persona 1:</label>
        <input type="date" id="fecha_examen_persona1" name="fecha_examen_persona1" required><br>

        <label for="numero_informe_persona1">N° de Informe Académico Persona 1:</label>
        <input type="text" id="numero_informe_persona1" name="numero_informe_persona1" required><br>

        <label for="fecha_informe_persona1">Fecha del Informe Académico Persona 1:</label>
        <input type="date" id="fecha_informe_persona1" name="fecha_informe_persona1" required><br>

        <label for="numero_oficio1">N° de Oficio 1:</label>
        <input type="text" id="numero_oficio1" name="numero_oficio1" required><br>

        <label for="fecha_oficio1">Fecha del Oficio 1:</label>
        <input type="date" id="fecha_oficio1" name="fecha_oficio1" required><br>

        <label for="numero_oficio2">N° de Oficio 2:</label>
        <input type="text" id="numero_oficio2" name="numero_oficio2" required><br>

        <label for="fecha_oficio2">Fecha del Oficio 2:</label>
        <input type="date" id="fecha_oficio2" name="fecha_oficio2" required><br>

        <label for="numero_recibo_ingreso">N° de Recibo de Ingreso:</label>
        <input type="text" id="numero_recibo_ingreso" name="numero_recibo_ingreso" required><br>

        <label for="fecha_recibo">Fecha del Recibo de Ingreso:</label>
        <input type="date" id="fecha_recibo" name="fecha_recibo" required><br>

        <label for="total">Total:</label>
        <input type="text" id="total" name="total" required><br>

        <div id="datos_persona2" style="display: none;">
            <hr>
            <label for="nombre_persona2">Nombre Persona 2:</label>
            <input type="text" id="nombre_persona2" name="nombre_persona2"><br>

            <label for="oficio1_persona2">N° de Oficio Persona 2:</label>
            <input type="text" id="oficio1_persona2" name="oficio1_persona2"><br>

            <label for="fecha_persona2">Fecha Persona 2:</label>
            <input type="date" id="fecha_persona2" name="fecha_persona2"><br>

            <label for="fecha_examen_persona2">Fecha del Examen Persona 2:</label>
            <input type="date" id="fecha_examen_persona2" name="fecha_examen_persona2"><br>

            <label for="numero_informe_persona2">N° de Informe Académico Persona 2:</label>
            <input type="text" id="numero_informe_persona2" name="numero_informe_persona2"><br>

            <label for="fecha_informe_persona2">Fecha del Informe Académico Persona 2:</label>
            <input type="date" id="fecha_informe_persona2" name="fecha_informe_persona2"><br>

            <label for="numero_oficioA_persona2">N° de Oficio A Persona 2:</label>
            <input type="text" id="numero_oficioA_persona2" name="numero_oficioA_persona2"><br>

            <label for="fecha_oficioA_persona2">Fecha del Oficio A Persona 2:</label>
            <input type="date" id="fecha_oficioA_persona2" name="fecha_oficioA_persona2"><br>

            <label for="numero_oficioB_persona2">N° de Oficio B Persona 2:</label>
            <input type="text" id="numero_oficioB_persona2" name="numero_oficioB_persona2"><br>

            <label for="fecha_oficioB_persona2">Fecha del Oficio B Persona 2:</label>
            <input type="date" id="fecha_oficioB_persona2" name="fecha_oficioB_persona2"><br>

            <label for="numero_recibo_ingreso_persona2">N° de Recibo de Ingreso Persona 2:</label>
            <input type="text" id="numero_recibo_ingreso_persona2" name="numero_recibo_ingreso_persona2"><br>

            <label for="fecha_recibo_persona2">Fecha del Recibo de Ingreso Persona 2:</label>
            <input type="date" id="fecha_recibo_persona2" name="fecha_recibo_persona2"><br>
        </div>
        
        <input type="submit" value="Modificar">
    </form>

    <script>
        document.querySelectorAll('input[type=radio][name=cantidad_personas]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var datosPersona2 = document.getElementById('datos_persona2');
                if (this.value === '2') {
                    datosPersona2.style.display = 'block';
                } else {
                    datosPersona2.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
