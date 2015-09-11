<?php

// creamos un array
$colores = array("rojo", "verde", "azul");

// mostramos su contenido
var_dump($colores);

// mostramos 1 elemento
echo $colores[1];

// usamos count para saber la cantidad de elementos que contiene
echo "Hay " . count($colores) . " colores";

// mostramos todos los elementos que hay
foreach($colores as $color) {
	echo $color . "<br>";
}