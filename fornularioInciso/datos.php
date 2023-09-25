<h2>Menu de Navegacion</h2>

<nav>
    <ul>
        <a href="index.html">
            <ul>
                <li>Unicio</li>
            </ul>
        </a>
    </ul>
</nav>

<?php

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['genero']) && isset($_POST['actividad'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['genero'];
    $actividad = $_POST['actividad'];
}

if (isset($_POST['lenguaje1'])) {
    $lenguaje = $_POST['lenguaje1'];
}else{
    $lenguaje = "Sin Lenguaje";
}

if (isset($_POST['lenguaje2'])) {
    $lenguaje2 = $_POST['lenguaje2'];
}else{
    $lenguaje2 = "Sin Lenguaje";
}

if (isset($_POST['lenguaje3'])) {
    $lenguaje3 = $_POST['lenguaje3'];
}else{
    $lenguaje3 = "Sin lenguaje";
}

echo "<strong><em>Los datos enviados fueron:</em></strong> <br>";
echo "<fieldset>";
echo "<legend>Datos:</legend>";
echo "<strong>Nombre: </strong>" . $nombre. "<br><strong>Apellido: </strong>" . $apellido . "<br><strong>Sexo: </strong>" . $sexo . "<br><strong>Actividad: </strong>" . $actividad . "<br><strong>Lenguaje 1: </strong>" . $lenguaje . "<br><strong>Lenguaje 2: </strong>" . $lenguaje2 . "<br><strong>Lenguaje 3: </strong>" . $lenguaje3;
echo "</fieldset>";

function autoload($class){
    include($class . "php");
}

spl_autoload("autoload");

?>
