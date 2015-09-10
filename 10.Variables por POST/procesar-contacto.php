<?php

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $datos_usuario = "Nombre: " . $nombre . "<br>";
    $datos_usuario .= "Email: " . $email . "<br>";
    $datos_usuario .= "Mensaje: " . $mensaje;

    echo $datos_usuario;