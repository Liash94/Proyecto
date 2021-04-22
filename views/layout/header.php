<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&C Rent A car</title>

    <link rel="stylesheet" href="<?= base_url ?>assets/css/style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <div id="container">
        <!-- CABECERA -->
        <header id="header">
            <div id="logo">
                <img src="<?= base_url ?>assets/css/imagenes/Logo.jfif" alt="Logo Vehiculo">
                <h1> C&C Rent A car</h1>
            </div>
        </header>

        <!-- MENU   ¿PONER CATEGORIAS CON UN WHILE? -->
    
            <?php $categorias = Utils::showCategorias(); ?>
            <nav id="menu">
            <ul>
                <li><a href="#"> Inicio</a></li>

                <?php foreach($categorias as $cat){?>
                <li><a href="<?=base_url?>categoria/ver&id=<?=$cat->getId()?>"><?=$cat->getNombre()?></a></li>
                <?php } ?>
             

                <li><a href="#"> Contacto</a></li>
            </ul>
        </nav>

        <div id="content">