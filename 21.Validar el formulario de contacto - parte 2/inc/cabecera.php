<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title><?php echo $tituloDePagina;?></title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
<header>
    <div class="contenedor">
        <div class="celda6">
            <h1>
                <a href="index.php">Nebaris celulares</a>
            </h1>
        </div>
        <div class="celda6">
            <ul>
                <li>
                    <a href="celulares.php" class="<?php if($seccion == "celulares") { echo "activo";} ?>">Celulares</a>
                </li>
                <li>
                    <a href="contacto.php" class="<?php if($seccion == "contacto") { echo "activo";} ?>">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<section id="encabezado">
    <div class="contenedor">
    </div>
</section>