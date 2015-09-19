<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $mensaje = trim($_POST["mensaje"]);

    if($nombre != "" && $email != "" && $mensaje != "") {

        foreach ($_POST as $valor) {
            if(stripos($valor, 'Content-Type:') !== FALSE) {
                echo "Ocurrió un error";
                exit;
            }
        }

        if($_POST["ubicacion"] != "") {
            echo "Ocurrió un error";
            exit;
        }

        $datos_usuario = "Nombre: " . $nombre . "<br>";
        $datos_usuario .= "Email: " . $email . "<br>";
        $datos_usuario .= "Mensaje: " . $mensaje;

        // TODO: enviar email

        header("Location: contacto.php?estado=gracias");
        exit;
    }
    else {
        $mensaje_error = "El nombre, el email y el mensaje son obligatorios.";
    }
}


$tituloDePagina = "Contacto";
$seccion = "contacto";
include('inc/cabecera.php');

?>

<section id="contenido">
    <div class="contenedor">
        <div class="celda12 center">

            <?php if(isset($_GET["estado"]) && $_GET["estado"] == "gracias") { ?>
                <h1>Gracias</h1>
                <p>Te estaremos respondiendo a la brevedad.</p>
            <?php } else { ?>

                <h1>Contacto</h1>
                <p>Para contactarme llená el formulario</p>
                <?php if(isset($mensaje_error)) { ?>
                    <p class="mensajeError">
                        <?php echo $mensaje_error; ?>
                    </p>
                <?php } ?>

                <form method="post">
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
                        <tr style="display: none">
                            <td>
                                <label for="ubicacion">Ubicación:</label>
                            </td>
                            <td>
                                <input type="text" name="ubicacion" id="ubicacion">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Enviar"/>
                </form>
            <?php } ?>
        </div>
    </div>
</section>

<?php include('inc/piedepagina.php'); ?>