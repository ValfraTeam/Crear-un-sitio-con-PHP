<?php
include('inc/productos.php');

$clave = $_GET["id"];
$producto = $celulares[$clave];
$tituloDePagina = "Celular - " . $producto["nombre"];
$seccion = "celulares";
include('inc/cabecera.php');
?>

    <section id="contenido">
        <div class="contenedor">
            <div class="celda12">
                <p>
                    <a href="celulares.php">Celulares</a>
                    / <?php echo $producto["nombre"]; ?>
                </p>
            </div>
            <div class="celda12">
                <h1 class="center"><?php echo $producto["nombre"]; ?></h1>
                <div class="celda6 center">
                    <a href="celular.php?id=<?php echo $clave; ?>">
                        <img src="img/<?php echo $producto["imagen"]; ?>" />
                    </a>
                </div>
                <div class="celda6">
                    <p>
                        <b>Nombre:</b>
                        <?php echo $producto["nombre"]; ?>
                    </p>
                    <p>
                        <b>Precio: $</b>
                        <?php echo $producto["precio"]; ?>
                    </p>
                    <p>
                        <b>Color:</b>
                        <?php echo $producto["color"]; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

<?php include('inc/piedepagina.php'); ?>