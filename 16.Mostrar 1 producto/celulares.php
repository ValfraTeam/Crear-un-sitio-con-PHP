<?php
include('inc/productos.php');
$tituloDePagina = "Celulares";
$seccion = "celulares";
include('inc/cabecera.php');
?>

    <section id="contenido">
        <div class="contenedor">
            <div class="celda12 center">
                <h1>Celulares</h1>

                <?php foreach($celulares as $clave => $celular) { ?>
                    <div class="celda4 center">
                        <a href="celular.php?id=<?php echo $clave; ?>">
                            <img src="img/<?php echo $celular["imagen"]; ?>" />
                        </a>
                        <p><?php echo $celular["nombre"]; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include('inc/piedepagina.php'); ?>