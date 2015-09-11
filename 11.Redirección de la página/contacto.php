<?php
    $tituloDePagina = "Contacto";
    $seccion = "contacto";
    include('inc/cabecera.php');
?>

<section id="contenido">
    <div class="contenedor">
        <div class="celda12 center">
            <h1>Contacto</h1>
            <p>Para contactarme llená el formulario</p>

            <form method="post" action="procesar-contacto.php">
                <table>
                    <tr>
                        <td>
                            <label for="nombre">Nombre:</label>
                        </td>
                        <td>
                            <input type="text" name="nombre" id="nombre">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email:</label>
                        </td>
                        <td>
                            <input type="text" name="email" id="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="mensaje">Mensaje:</label>
                        </td>
                        <td>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                </table>
                <input type="submit" value="Enviar"/>
            </form>
        </div>
    </div>
</section>

<?php include('inc/piedepagina.php'); ?>