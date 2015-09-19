<?php
    $tituloDePagina = "Inicio";
    include('inc/cabecera.php');
    include('inc/productos.php');
?>

    <section id="contenido">
        <div class="contenedor">
            <?php
            $ultimos = array_slice($celulares, -3, 3);
            foreach($ultimos as $clave => $celular) {
                echo mostrar_producto($clave, $celular);
            }
            ?>
        </div>
    </section>

<?php include('inc/piedepagina.php'); ?>