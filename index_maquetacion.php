<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&C Rent A car</title>


    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <div id="container">
        <!-- CABECERA -->
        <header id="header">
            <div id="logo">
                <img src="assets/css/imagenes/Logo.jfif" alt="Logo Vehiculo"> <!-- AUN POR INSERTAR -->

                <h1> C&C Rent A car</h1>
            </div>
        </header>

        <!-- MENU AÑADIR ENLACES AUN -->
        <nav id="menu">
            <ul>
                <li><a href="#"> Inicio</a></li>
                <li><a href="#"> Motocicletas</a></li>
                <li><a href="#"> Turismos</a></li>
                <li><a href="#"> Furgonetas</a></li>
                <li><a href="#"> Camiones</a></li>
                <li><a href="#"> Contacto</a></li>
             
            </ul>
        </nav>

        <div id="content">

            <!-- BARRA LATERAL -->

            <aside id="lateral">

                <div id="login" class="block_aside">
                    <h3> Loging </h3>
                    <form action="#" method="post">
                        <label for="email">Email </label>
                        <input type=" email" name="email">

                        <label for="password">Contraseña </label>
                        <input type="password" name="password">

                        <input type="submit" value="Enviar">
                    </form>

                    <ul>
                        <li><a href="#"> Mis Reservas </a></li>
                        <li><a href="#"> Gestionar Reservas</a></li>
                        <li><a href="#">Gestionar Vehiculos</a></li>
                    </ul>
                </div>

            </aside>
            <div id="central">

                <!-- CENTRAL -->

                <h1> Vehiculos Disponibles </h1>
                <div class="vehicle">
                    <img src="assets/css/imagenes/MercedesVito.png" alt="Mercedes Vito">
                    <h2> Mercedes Vito </h2>
                    <a class="button" href="#">Reservar</a>
                </div>

                <div class="vehicle">
                    <img src="assets/css/imagenes/OpelAstra.jpg" alt="Opel Astra">
                    <h2> Opel Astra </h2>
                    <a class="button" href="#">Reservar</a>
                </div>

                <div class="vehicle">
                    <img src="assets/css/imagenes/OpelCorsa.jpg" alt="Opel Corsa">
                    <h2> Opel Corsa</h2>
                    <a class="button" href="#">Reservar</a>
                </div>

                <div class="vehicle">
                    <img src="assets/css/imagenes/RenaultMaster.jpg" alt="Renault Master">
                    <h2> Renault Master</h2>
                    <a class="button" href="#">Reservar</a>
                </div>


                <div class="vehicle">
                    <img src="assets/css/imagenes/SeatLeon.jpg" alt="Seat León">
                    <h2> Seat León</h2>
                    <a class="button" href="#">Reservar</a>
                </div>

                <!-- FOOTER -->
            </div>
        </div>

        <footer class="footer bg-dark p-5">
            <div class="container grid">
                <div>
                    <h1>C&C Rent A car</h1>
                    <p> Telefono 555 - 555555</p>
                    <p> Copyright &copy; 2021</p>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="index.html">Vehiculos</a></li>
                        <li><a href="index.html">Contacto</a></li>

                    </ul>
                </nav>
                <div class="social">
                    <a href="#"> <i class="fab fa-twitter fa-2x"></i></a>
                    <a href="#"> <i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#"> <i class="fab fa-instagram fa-2x"></i></a>
                </div>

            </div>
        </footer>
    </div>

</body>

</html>