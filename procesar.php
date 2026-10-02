<?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $ciudad = $_POST['ciudad'];

    echo "Hola " . $nombre . ", tenés " . $edad . " años y vivís en " . $ciudad . ".";
    echo "<br>";

    if ($edad >= 18) {
        echo "Sos mayor de edad";
    } else {
        echo "Sos menor de edad";
    }
?>