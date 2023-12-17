<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../src/css/Index.css">
    <title>Landing Page - Taller Digital Page</title>
    <meta name="description" content="Landing Page - Taller Digital Page">
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo/logo-generic-icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

</head>

<body>
    <div class="containerHeader">
    <header>
            <div class="logo">
                <a href="index.html">
                    <img src="../../assets/img/logo/logo-generic-optimizado.png" alt="Logo de la empresa">
                </a>
            </div>
            <div class="menu-toggle">&#9776;</div>
            <nav>
                <ul>
                    <li><a href="#acerca">Acerca de Nosotros</a></li>
                    <li class="dropdown"><a href="#servicios">Servicios &#9662;</a>
                        <ul class="submenu">
                            <li><a href="#servicio1">Servicio 1</a></li>
                            <li><a href="#servicio2">Servicio 2</a></li>
                        </ul>
                    </li>
                    <li class="element-Menu-li-bar dropdown"><a href="#propiedades">Propiedades &#9662;</a>
                        <ul class="submenu">
                            <li><a href="#propiedad1">Propiedad 1</a></li>
                            <li><a href="#propiedad2">Propiedad 2</a></li>
                        </ul>
                    </li>
                    <li class="element-Menu-li-Contact"><a href="#contacto">Contáctanos</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <section class="seccion2">
        <div class="contenido">
            <div class="texto">
                <?php
                // Include the database connection file
                include("../../src/db/dbmysql.php");

                // Loop through each user ID
                for ($id = 1; $id <= 2; $id++) {
                    // Your SQL query to select a specific user by ID
                    $usuario = "SELECT * FROM `use` WHERE id = $id";

                    // Execute the query
                    $resultado = mysqli_query($cone, $usuario);

                    // Check if the query was successful
                    if ($resultado) {
                        // Display the results within the specified sections
                        while ($row = mysqli_fetch_assoc($resultado)) {
                            echo '<h2>' . $row['name'] . '</h2>
                                  <h1>' . $row['des'] . '</h1>
                                  <p>' . $row['fono'] . '</p>';
                        }

                        // Free the result set
                        mysqli_free_result($resultado);
                    } else {
                        // Display an error message if the query fails
                        echo "Error: " . mysqli_error($cone);   
                    }
                }

                // Close the database connection
                mysqli_close($cone);
                ?>
                <section class="contacto">
                    <div class="contacto-item">
                        <div class="icono-persona">
                            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                            </svg>
                        </div>
                        <div class="texto-contacto">
                            <div class="titulo-contacto">
                                <div class="titulo-contacto-div-titulo">
                                    <h3>Lorem Ipsum</h3>
                                    <div class="icono-contacto">
                                        <p class="icono-contacto-p">
                                            ?
                                        </p>
                                    </div>
                                </div>
                                <p class="titulo-contacto-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p class="titulo-contacto-tele">Tel: + 00 0 000000 </p>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="contacto">
                    <div class="contacto-item">
                        <div class="icono-persona-segundo">
                            <svg fill="#ffffff" xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path
                                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                            </svg>
                        </div>
                        <div class="texto-contacto">
                            <div class="titulo-contacto">
                                <div class="titulo-contacto-div-titulo">
                                    <h3>Lorem Ipsum</h3>
                                    <div class="icono-contacto">
                                        <p class="icono-contacto-p">
                                            ?
                                        </p>
                                    </div>
                                </div>
                                <p class="titulo-contacto-des">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <p class="titulo-contacto-tele">Tel: + 00 0 000000 </p>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="imagen">
            <img src="../../assets/img/diseños/Grupo img primera sección.png" alt="Descripción de la imagen">
        </div>
    </section>
    <div class="containerseccion3">
        <section class="seccion3">
            <div class="seccion3-fomrularios">
                <div class="imagen">
                    <img src="../../assets/img/diseños/Grupo img segunda sección.png" alt="Descripción de la imagen">
                </div>
                <div class="formulario">
                    <h2>contacto</h2>
                    <h3>¡Conversemos!</h3>
                    <form id="contactForm" action="#" method="post">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
    
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
    
                        <label for="mensaje">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" required></textarea>
    
                        <!-- Change the button type to "submit" -->
                        <button type="submit" id="submitForm">Contactar</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script src="src/js/Index.js"></script>
</body>



</html>


