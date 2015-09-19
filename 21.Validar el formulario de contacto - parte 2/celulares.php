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

                <?php
                    foreach($celulares as $clave => $celular) {
                        echo mostrar_producto($clave, $celular);
                    }
                ?>
            </div>
        </div>
    </section>

<?php include('inc/piedepagina.php'); ?>