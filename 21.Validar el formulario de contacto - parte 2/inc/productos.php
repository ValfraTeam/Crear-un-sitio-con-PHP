<?php

function mostrar_producto($id_producto, $producto) {
    $salida = "";
    $salida .= '<div class="celda4 center">';
    $salida .=      '<a href="celular.php?id=' . $id_producto . '">';
    $salida .=          '<img src="img/' . $producto["imagen"] . '" />';
    $salida .=      '</a>';
    $salida .=      '<p>' . $producto["nombre"] . '</p>';
    $salida .= '</div>';

    return $salida;
}

$celulares = array();
$celulares["01"] = array(
    "nombre" => "celular 01",
    "imagen" => "celular01.png",
    "precio" => 8000,
    "color" => "negro"
);
$celulares["02"] = array (
    "nombre" => "celular 02",
    "imagen" => "celular02.png",
    "precio" => 9000,
    "color" => "blanco"
);
$celulares["03"] = array (
    "nombre" => "celular 03",
    "imagen" => "celular03.png",
    "precio" => 5000,
    "color" => "blanco"
);
$celulares["04"] = array (
    "nombre" => "celular 04",
    "imagen" => "celular04.png",
    "precio" => 3500,
    "color" => "blanco"
);
$celulares["05"] = array (
    "nombre" => "celular 05",
    "imagen" => "celular05.png",
    "precio" => 7000,
    "color" => "blanco"
);
$celulares["06"] = array (
    "nombre" => "celular 06",
    "imagen" => "celular06.png",
    "precio" => 2000,
    "color" => "gris"
);
$celulares["07"] = array (
    "nombre" => "celular 07",
    "imagen" => "celular07.png",
    "precio" => 12000,
    "color" => "negro"
);
$celulares["08"] = array (
    "nombre" => "celular 08",
    "imagen" => "celular08.png",
    "precio" => 5500,
    "color" => "blanco"
);
$celulares["09"] = array (
    "nombre" => "celular 09",
    "imagen" => "celular09.png",
    "precio" => 11000,
    "color" => "negro"
);