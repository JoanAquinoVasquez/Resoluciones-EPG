<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad_personas = $_POST["cantidad_personas"];

    if ($cantidad_personas == "1") {
        $nombre_persona1 = $_POST["nombre_persona1"];
        $oficio1_persona1 = $_POST["oficio1_persona1"];

        
        $fecha_persona1 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_persona1"])->format('j \d\e F \d\e Y');
        $nombre_docente = $_POST["nombre_docente"];
        $fecha_examen_persona1 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_examen_persona1"])->format('j \d\e F \d\e Y');
        $numero_informe_persona1 = $_POST["numero_informe_persona1"];
        $fecha_informe_persona1 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_informe_persona1"])->format('j \d\e F \d\e Y');
        $numero_oficio1 = $_POST["numero_oficio1"];
        $fecha_oficio1 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_oficio1"])->format('j \d\e F \d\e Y');

        $numero_oficio2 = $_POST["numero_oficio2"];
        $fecha_oficio2 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_oficio2"])->format('j \d\e F \d\e Y');

        $numero_recibo_ingreso = $_POST["numero_recibo_ingreso"];
        $fecha_recibo1 =  DateTime::createFromFormat('Y-m-d', $_POST["fecha_recibo"])->format('j \d\e F \d\e Y');
        $total = $_POST["total"];

        // Aquí puedes realizar cualquier procesamiento adicional necesario para 1 persona
        // Por ejemplo, generar un documento o realizar cálculos
        
        // Ejemplo de salida para mostrar el texto modificado
        $texto_modificado ="
        El oficio N° $oficio1_persona1-2023-UI-EPG de fecha $fecha_persona1 de la Unidad de Idiomas, es necesario contratar los servicios docentes de $nombre_docente para la elaboración, desarrollo y evaluación de examen de suficiencia del idioma extranjero inglés del estudiante $nombre_persona1 desarrollado el día $fecha_examen_persona1;
        <br><br>
        CONSIDERANDO:
        <br><br>
        Que, la Resolución N° 262-2019-CU, de fecha 19 de agosto de 2019, ratifica la Resolución N° 008-2019-CD-EPG-UNPRG de fecha 27 de junio de 2019, que aprueba el Reglamento de la Unidad de ldiomas de la Escuela de Posgrado de la Universidad Nacional Pedro Ruiz Gallo;
        <br><br>
        Que, la Resolución N° 306-2023-CU, ratifica la Resolución N° 008-2023-EPG de fecha 03 de enero de 2023, que aprueba el Proyecto Dictado de Curso de Idioma Extranjero y el presupuesto presentado por la Unidad de ldiomas de la Escuela de Posgrado de la UNPRG, correspondiente al año 2023, modalidad Tele Presencial haciendo uso de la plataforma google meet, dirigido a maestrantes y doctorandos de la Escuela de Posgrado, como requisito para tramitar sus grados académicos;
        <br><br>
        Que, para la elaboración, desarrollo evaluación de examen de suficiencia del idioma extranjero inglés al estudiante $nombre_persona1, se requiere contar con los servicios de la docente $nombre_docente durante el día $fecha_examen_persona1;
        <br><br>
        Que, se ha convenido con $nombre_docente, otorgarle una contraprestación de Cincuenta soles y 00/100 soles ($/.50.00) por examen de suficiencia de idioma extranjero inglés, elaborado, desarrollado y evaluado;
        <br><br>
        Que, mediante Informe N° $numero_informe_persona1-2023-RYMR de fecha $fecha_examen_persona1 la docente $nombre_docente presenta su informe en el cual remite la nota obtenida por la estudiante que rindió el examen de suficiencia del idioma extranjero inglés;
        <br><br>
        Que, el Oficio N° $numero_oficio1-2023-UI-EPG de fecha $fecha_oficio1 de la Unidad de Idiomas remite el informe para trámite de pago de examen de suficiencia del idioma extranjero inglés de la docente $nombre_docente, la cual ha elaborado, desarrollado y evaluado examen de suficiencia de idioma extranjero inglés al estudiante $nombre_persona1;
        <br><br>
        Que, mediante Oficio N° $numero_oficio2-2023-DA-EPG-UNPRG de fecha $fecha_oficio2 la Ing. María del Carmen Romero Mercedes - Directora Académica de la Escuela de Posgrado da la conformidad de servicios por examen de suficiencia idioma inglés del estudiante $nombre_persona1 y solicita se efectúe el pago de los servicios prestados del docente $nombre_docente;
        <br><br>
        Que, existe el recibo de ingresos EPG-2019 N° $numero_recibo_ingreso de fecha $fecha_recibo1 por el importe total de S/.$total soles (Ciento cincuenta y 00/100 soles) por concepto de curso de idioma, a nombre del señor $nombre_persona1;
        <br><br>
        Que, por tanto, debe expedirse la resolución pertinente:
        <br><br>
        En uso de las atribuciones que la Ley Universitaria 30220, el Estatuto de la Universidad y el Reglamento de la Escuela de Posgrado, le confieren al Director de la Escuela de la EPG - UNPRG;
        <br><br>
        <br><br>
        RESOLUCIÓN N° xxx-2023-EPG
        Lambayeque, xx de mayo de 2024
        <br><br>
        SE RESUELVE:
        <br><br>
        ARTICULO PRIMERO.- Contratar en vías de regularización, los servicios docentes de $nombre_docente para Ia elaboración, desarrollo y evaluación de examen de suficiencia del idioma extranjero inglés del  estudiante $nombre_persona1 durante el día  $fecha_examen_persona1 otorgándole una contraprestación de Cincuenta y 00/100 soles (S/.50.00).
        <br><br>
        ARTICULO SEGUNDO.- El egreso económico se hará con cargo a los recursos directamente recaudados por examen de suficiencia de idiomas extranjeros de la Unidad de Idiomas de la Escuela de Posgrado de la UNPRG, afectándose las partidas correspondientes del presupuesto de la Unidad de ldiomas del año 2023 de la Escuela de Posgrado.
        <br><br>
        ARTICULO TERCERO.- HACER conocer la presente resolución a la Unidad de Contabilidad de la Escuela de Posgrado y a $nombre_docente.
        <br><br>
        
        REGISTRESE, COMUNIQUESE Y ARCHIVESE.
        ";

        echo "<p> $texto_modificado </p>";



    } elseif ($cantidad_personas == "2") {
        $nombre_persona1 = $_POST["nombre_persona1"];
$oficio1_persona1 = $_POST["oficio1_persona1"];
$fecha_persona1 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_persona1"])->format('j');
$nombre_docente = $_POST["nombre_docente"];
$fecha_examen_persona1 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_examen_persona1"])->format('j');
$numero_informe_persona1 = $_POST["numero_informe_persona1"];
$fecha_informe_persona1 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_informe_persona1"])->format('j \d\e F \d\e Y');
$numero_oficioA_persona1 = $_POST["numero_oficioA_persona1"];
$fecha_oficioA_persona1 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_oficioA_persona1"])->format('j \d\e F \d\e Y');
$numero_oficioB_persona1 = $_POST["numero_oficioB_persona1"];
$fecha_oficioB_persona1 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_oficioB_persona1"])->format('j \d\e F \d\e Y');
$numero_recibo_ingreso_persona1 = $_POST["numero_recibo_ingreso_persona1"];
$fecha_recibo_persona1 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_recibo_persona1"])->format('j \d\e F \d\e Y');

$nombre_persona2 = $_POST["nombre_persona2"];
$oficio1_persona2 = $_POST["oficio1_persona2"];
$fecha_persona2 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_persona2"])->format('j \d\e F \d\e Y');
$fecha_examen_persona2 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_examen_persona2"])->format('j \d\e F \d\e Y');
$numero_informe_persona2 = $_POST["numero_informe_persona2"];
$fecha_informe_persona2 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_informe_persona2"])->format('j \d\e F \d\e Y');
$numero_oficioA_persona2 = $_POST["numero_oficioA_persona2"];
$fecha_oficioA_persona2 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_oficioA_persona2"])->format('j \d\e F \d\e Y');
$numero_oficioB_persona2 = $_POST["numero_oficioB_persona2"];
$fecha_oficioB_persona2 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_oficioB_persona2"])->format('j \d\e F \d\e Y');
$numero_recibo_ingreso_persona2 = $_POST["numero_recibo_ingreso_persona2"];
$fecha_recibo_persona2 = DateTime::createFromFormat('Y-m-d', $_POST["fecha_recibo_persona2"])->format('j \d\e F \d\e Y');
$total = $_POST["total"];

        // Aquí puedes realizar cualquier procesamiento adicional necesario para 2 personas
        // Por ejemplo, generar un documento o realizar cálculos

        // Ejemplo de salida para mostrar el texto modificado
        $texto_modificado ="
        VISTO:

        Los oficios N° $oficio1_persona1-2023-UI-EPG de fecha $fecha_persona1 y N° $oficio1_persona2-2023-UI-EPG de fecha $fecha_persona2 de la Unidad de Idiomas, es necesario contratar los servicios docentes del $nombre_docente para la elaboración, desarrollo y evaluación de exámenes de suficiencia del idioma extranjero inglés de los estudiantes $nombre_persona1 y $nombre_persona2 durante los días $fecha_persona1 y $fecha_persona2, respectivamente;
        
        CONSIDERANDO:
        
        Que, la Resolución N° 262-2019-CU, de fecha 19 de agosto de 2019, ratifica la Resolución N° 008-2019-CD-EPG-UNPRG de fecha 27 de junio de 2019, que aprueba el Reglamento de la Unidad de ldiomas de la Escuela de Posgrado de la Universidad Nacional Pedro Ruiz Gallo;
        <br><br>
        Que, la Resolución N° 306-2023-CU, ratifica la Resolución N° 008-2023-EPG de fecha 03 de enero de 2023, que aprueba el Proyecto Dictado de Curso de Idioma Extranjero y el presupuesto presentado por la Unidad de ldiomas de la Escuela de Posgrado de la UNPRG, correspondiente al año 2023, modalidad Tele Presencial haciendo uso de la plataforma google meet, dirigido a maestrantes y doctorandos de la Escuela de Posgrado, como requisito para tramitar sus grados académicos;
        <br><br>
        Que, para la elaboración, desarrollo evaluación de examen de suficiencia del idioma extranjero inglés a los estudiantes $nombre_persona1 y $nombre_persona2, se requiere contar con los servicios del docente $nombre_docente durante los días 24 y 28 de marzo del 2023;
        <br><br>
        Que, se ha convenido con el $nombre_docente, otorgarle una contraprestación de Cincuenta soles y 00/100 soles (S/.50.00) por examen de suficiencia de idioma extranjero inglés, elaborado, desarrollado y evaluado;
        <br><br>
        Que, mediante Informe N° $numero_informe_persona1-2023/UI-EPG/JVG de fecha $fecha_informe_persona1 y N° $numero_informe_persona2-2023/UI-EPG de $fecha_informe_persona2 el docente $nombre_docente presenta sus informes en el cual remite las notas obtenida por los estudiantes que rindieron los exámenes de suficiencia del idioma extranjero inglés;
        <br><br>
        Que, el Oficio N° $numero_oficioA_persona1-2023-UI-EPG de fecha $fecha_oficioA_persona1 y y N° $numero_oficioA_persona2-2023/UI-EPG de fecha $fecha_oficioA_persona2 de la Unidad de Idiomas remite el informe para trámite de pago de examen de suficiencia del idioma extranjero inglés del docente $nombre_docente, la cual ha elaborado, desarrollado y evaluado los exámenes de suficiencia de idioma extranjero inglés de los estudiantes $nombre_persona1 y $nombre_persona2;
        <br><br>
        Que, mediante Oficio N° $numero_oficioB_persona1-2023-DA-EPG-UNPRG de fecha $fecha_oficioB_persona1 y N° $numero_oficioB_persona2-2023-DA-EPG-UNPRG de fecha $fecha_oficioB_persona2 la Ing. María del Carmen Romero Mercedes - Directora Académica de la Escuela de Posgrado da la conformidad de servicios por exámenes de suficiencia idioma inglés de los estudiantes $nombre_persona1 y $nombre_persona2 y solicita se efectúe el pago de los servicios prestados del docente $nombre_docente;
        <br><br>
        Que, existe el recibo de ingresos EPG-2019 N° $numero_recibo_ingreso_persona1 de fecha $fecha_recibo_persona1 por el importe total de S/.150.00 soles (Ciento cincuenta y 00/100 soles) por concepto de curso de idioma, a nombre del señor $nombre_persona1;
        <br><br>
        Que, existe el recibo de ingresos EPG-2019 N° $numero_recibo_ingreso_persona2 de fecha $fecha_recibo_persona2 por el importe total de S/.150.00 soles (Ciento cincuenta y 00/100 soles) por concepto de curso de idioma, a nombre del señor $nombre_persona2;
        <br><br>
        Que, por tanto, debe expedirse la resolución pertinente:
        <br><br>
        En uso de las atribuciones que la Ley Universitaria 30220, el Estatuto de la Universidad y el Reglamento de la Escuela de Posgrado, le confieren al Director de la Escuela de la EPG - UNPRG;
        RESOLUCIÓN N° xxx-2023-EPG
        Lambayeque, xx de mayo de 2024
        <br><br>
        SE RESUELVE:
        <br><br>
        ARTICULO PRIMERO.- Contratar en vías de regularización, los servicios docentes del $nombre_docente otorgándole una contraprestación de Cien y 00/100 soles (S/.100.00) para la elaboración, desarrollo y evaluación de examen de suficiencia del idioma extranjero inglés de los estudiantes $nombre_persona1 y $nombre_persona2 durante los días $fecha_examen_persona1 y $fecha_examen_persona2, respectivamente.
        <br><br>
        ARTICULO SEGUNDO.- El egreso económico se hará con cargo a los recursos directamente recaudados por examen de suficiencia de idiomas extranjeros de la Unidad de Idiomas de la Escuela de Posgrado de la UNPRG, afectándose las partidas correspondientes del presupuesto de la Unidad de ldiomas del año 2023 de la Escuela de Posgrado.
        <br><br>
        ARTICULO TERCERO.- HACER conocer la presente resolución a la Unidad de Contabilidad de la Escuela de Posgrado y al $nombre_docente.
        <br><br>
        REGISTRESE, COMUNIQUESE Y ARCHIVESE.
        "
        // Mostrar el resto de los datos procesados para cada persona
        // ...
        ;

        echo "<p>" . htmlspecialchars($texto_modificado) . "</p>";


    }
}

