<?php

// creamos 1 función sin valor de retorno
function saludar ($nombre) {
	echo "Hola " . $nombre . "<br>";
}

// ahora podemos llamar al bloque de código tantas veces como necesitemos
saludar("Gabriel");
saludar("Fernando");
saludar("Celeste");
saludar("Marta");

// creamos otra con valor de retorno
function saludarRetorno ($nombre) {
	return "Hola " . $nombre;
}

// para ver el resultado tenemos que utilizar la instrucción echo
echo saludarRetorno("Gabriel");