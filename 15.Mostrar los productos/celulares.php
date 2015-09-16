<?php

$celulares = array();
$celulares["01"] = array (
    "nombre" => "celular 01",
    "imagen" => "celular01.png"
);
$celulares["02"] = array (
    "nombre" => "celular 02",
    "imagen" => "celular02.png"
);
$celulares["03"] = array (
    "nombre" => "celular 03",
    "imagen" => "celular03.png"
);
$celulares["04"] = array (
    "nombre" => "celular 04",
    "imagen" => "celular04.png"
);
$celulares["05"] = array (
    "nombre" => "celular 05",
    "imagen" => "celular05.png"
);
$celulares["06"] = array (
    "nombre" => "celular 06",
    "imagen" => "celular06.png"
);
$celulares["07"] = array (
    "nombre" => "celular 07",
    "imagen" => "celular07.png"
);
$celulares["08"] = array (
    "nombre" => "celular 08",
    "imagen" => "celular08.png"
);
$celulares["09"] = array (
    "nombre" => "celular 09",
    "imagen" => "celular09.png"
);

$tituloDePagina = "Celulares";
$seccion = "celulares";
include('inc/cabecera.php');
?>

    <section id="contenido">
        <div class="contenedor">
            <div class="celda12 center">
                <h1>Celulares</h1>

                <?php foreach($celulares as $celular) { ?>
                    <div class="celda4 center">
                        <img src="img/<?php echo $celular["imagen"]; ?>" />
                        <p><?php echo $celular["nombre"]; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include('inc/piedepagina.php'); ?>