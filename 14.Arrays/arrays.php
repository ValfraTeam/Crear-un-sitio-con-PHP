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

// agregamos de a 1 elemento por vez
$colores = array();
$colores[] = "rojo";
$colores[] = "verde";
$colores[] = "azul";

// indicamos una clave para cada elemento
$array = array();
$array[50] = "rojo";
$array[33] = "verde";
$array[4] = "azul";

// creamos un array asociativo
$computadora = array();
$computadora["ram"] = 8;
$computadora["cores"] = 4;
$computadora["rigido"] = 500;

// o de forma más compacta...
$computadora = array(
	"ram" => 8,
	"cores" => 4,
	"rigido" => 500
);

// mostramos un elemento
echo $computadora["cores"];

// creamos un array multidimensional o anidado
$computadoras = array();
$computadoras["escritorio"] = array (
	"ram" => 8,
	"cores" => 4,
	"rigido" => 500
);
$computadoras["notebook"] = array (
	"ram" => 4,
	"cores" => 2,
	"rigido" => 128
);

// mostramos un elementos
echo $computadoras["notebook"]["cores"];

?>

// iteramos todos los elementos
<?php foreach($computadoras as $descripcion=>$computadora) { ?>
	<h2><?php echo $descripcion; ?></h2>
	<ul>
		<?php foreach($computadora as $propiedad=>$valor) { ?>
			<li><?php echo $propiedad . " = " . $valor; ?></li>
		<?php } ?>
	</ul> 
<?php } ?>