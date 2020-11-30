<!DOCTYPE html>
<html>
<head>
<title>Inscripcion</title>
<script type="text/javascript" src="../js/code.js"></script>
<link rel='stylesheet' type='text/css' media='screen' href='../css/style.css'>
</head>

<body>
<div class="header">
    <div class="topnav">
        <a href="./index.html">Inici</a>
        <a href="#">Classificacions</a>
        <a href="./inscripcion.php">Inscripcions</a>
        <a href="#">Noticies</a>
        <a href="#">Galeria</a>
        <div class="idioma">
            <select aria-placeholder="Idioma">
                <option>Español</option>
                <option>Ingles</option>
            </select>
            <button>Enviar</button>
        </div>
    </div>
    <div class="inscribete">
        <form action="./inscripcion.php" method="POST" onsubmit="return validacionForm()">
            <p>Nombre: </p> 
            <input type="text" name="name" size="40" id="validado1">
            <p>Apellido: </p>
            <input type="text" name="apellido" size="40" id="validado2">
            <p>DNI: </p>
            <input type="text" name="dni" size="40" id="validado3" onfocusout="validaDNI()">
            <p>Fecha de nacimiento: </p>
            <input type="date" name="nacido" id="validado4" onfocusout="validaCategoria()"><br>
            <div id="mensaje" class="mensaje">

            </div>  
            <p>Sexo:<br><br>
                <input type="radio" name="sexo" value="Masculino"> Masculino
                <input type="radio" name="sexo" value="Femenino"> Femenino
            </p>
            <p>
                <input type="submit" value="Enviar">
            </p>
            <div id="mensaje1" class="mensaje1">

            </div> 
        </form>
    </div>
    <h2><a href='./index.html'>Volver al inicio</a></h2>

    <?php

        if (isset($_REQUEST['name'])) {
            require_once '../model/participante.php';
            require_once '../model/participanteDAO.php';
            $participante = new participante($_REQUEST['name'], $_REQUEST['apellido'], $_REQUEST['dni'], $_REQUEST['nacido'], $_REQUEST['sexo']);
            $participanteDAO = new participanteDAO;
            $participanteDAO->addParticipante($participante);
            $participanteDAO->addInscripcion($participante);
        }

    ?>

</div>
</body>

</html>