<?php
include 'conexion_be.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family: 'Shantell Sans', cursive;&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </script>
    <script>
        src = "js/functions.js"
            <
            link rel = "stylesheet"
        href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
        integrity = "sha512-t42oDrKONJHtddnbgOs4UUI8x/mQ4aCUfeoBIBzxKElVi0qmx0i1WPhBcp4tU8HfC4I+fzuuWE5fH+pi0UUrPw=="
        crossorigin = "anonymous"
        referrerpolicy = "no-referrer" / >
        <
            !--Referencia al archivo JavaScript de Bootstrap-- >
                <
        script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"
                    integrity="sha512-N1V4aEwOJxkRnlvDv9A6HivuF1txd5mUhHAA4ojz79I5Oh+dpvC7JrtbNVrZdYiZ58p41dKxlLxEFO3KTwX+sg=="
                    crossorigin="anonymous"
                    referrerpolicy="no-referrer" >
    </script>
    <style>
        article {
            float: left;
            margin-right: 20px;
        }
    </style>
</head>


<body>


    <div class="card crdbody">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Ministerio de Cultura y deportes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Mas de Nosotros
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="">Actividades</a></li>
                                <li><a class="dropdown-item" href="">Municipios </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <input id="condi" value="CreaProd" readonly hidden>
    <div class="card crdbody">
        <!--aqui inicia el card-->
        <div class="card-header">
            <h4>Algunos Guatemaltecos Destacados</h4>
        </div>
        <div class="leftcontent">
            <div class="innerblock">
                <div class="bloghighlight">
                    <div class="card-body">
                        <article style="float: left; margin-right: 20px;">
                            <h2>Miguel Angel Asturias</h2>
                            <p>Miguel Ángel Asturias, nacido en 1899 en Guatemala, es una figura central en la
                                literatura guatemalteca y latinoamericana del siglo XX. Su legado abarca diversos
                                géneros literarios, destacando en el "realismo mágico". Tras estudiar derecho y
                                humanidades en Guatemala, viajó a París para estudiar antropología y literatura,
                                influyendo en su estilo creativo.

                                Su novela "Hombres de maíz" (1949) fusiona mitos mayas con crítica social y política
                                guatemalteca. "El señor presidente" (1946) critica la dictadura y corrupción en
                                Guatemala. Asturias utiliza metáforas y simbolismo para mezclar lo mágico y lo real en
                                su estilo literario.

                                Asturias fue un defensor de los derechos indígenas y un crítico social. Como
                                diplomático, representó a Guatemala y fue testigo de problemáticas globales. En 1967,
                                recibió el Premio Nobel de Literatura por su compromiso con causas indígenas y justicia.

                                Su legado trasciende en la literatura y el activismo social, inspirando a escritores y
                                lectores, y su habilidad para mezclar lo fantástico con lo político y cultural lo
                                convierte en un autor influyente.</p>
                            <!-- Puedes insertar aquí la imagen de Miguel Angel Asturias -->
                        </article>
                        <div class="rightcontent">
                            <div class="innerblock">
                                <div class="highlight">
                                    <ul class="portfolio-images">
                                        <li><img src="image/asturias_miguel_angel.jpg" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- ROW FIN  -->
                    <div class="card-body">
                        <article style="float: left; margin-right: 20px;">
                            <h2>Rigoberta Menchú</h2>
                            <p>Rigoberta Menchú, nacida en Guatemala en 1959, es un ícono en la lucha por derechos
                                indígenas y justicia global. Perteneciente al grupo quiché, su vida fue marcada por la
                                discriminación y el conflicto armado interno en Guatemala.

                                En 1983, escribió "Me llamo Rigoberta Menchú", relatando su vida y las injusticias que
                                sufrieron las comunidades indígenas. Ganó el Premio Nobel de la Paz en 1992 por su
                                defensa de los derechos humanos y la justicia.

                                Menchú fundó la Fundación Rigoberta Menchú Tum para mejorar condiciones indígenas. Su
                                legado resuena en la lucha por igualdad y justicia de los pueblos indígenas en el mundo.
                            </p>
                            <!-- Puedes insertar aquí la imagen de Rigoberta Menchu -->
                        </article>
                        <div class="rightcontent">
                            <div class="innerblock">
                                <div class="highlight">
                                    <ul class="portfolio-images">
                                        <li><img src="image/Biografía-de-Rigoberta-Menchú1.jpg" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- ROW FIN  -->
                    <div class="card-body">
                        <article style="float: left; margin-right: 20px;">
                            <h2>Luis Von Ahn</h2>
                            <p>Luis von Ahn, informático y empresario guatemalteco, es un líder tecnológico global.
                                Desarrolló el concepto de "crowdsourcing", utilizando colaboración en línea para
                                resolver problemas. Fundó empresas exitosas y creó el sistema CAPTCHA.
                                Con un doctorado en Ciencias de la Computación, fusionó tecnología e innovación social.
                                Creó "reCAPTCHA", luego adquirido por Google, y fundó Duolingo en 2011, plataforma
                                educativa en línea para aprender idiomas.
                                Von Ahn demuestra cómo la tecnología puede resolver problemas reales y mejorar vidas. Su
                                enfoque en el crowdsourcing y la educación en línea lo convierte en un líder tecnológico
                                y emprendedor ejemplar.</p>
                            <!-- Puedes insertar aquí la imagen de Luis Von Ahn -->
                        </article>
                        <div class="rightcontent">
                            <div class="innerblock">
                                <div class="highlight">
                                    <ul class="portfolio-images">
                                        <li><img src="image/Luis_von_Ahn.png" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- ROW FIN  -->

                </div>
            </div>
        </div>

    </div>
    <!--aqui inicia el card-->
    <div class="card crdbody">
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contactanos</h2>
                    <p>¿Cómo Encontrarnos? <span>Facil y Rapido</span></p>
                </div>

                <div class="mb-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15440.926013606952!2d-90.5132171!3d14.642796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a21111b3bf0f%3A0x5c07ea6684d79eed!2sMinisterio%20de%20Cultura%20y%20Deportes!5e0!3m2!1ses-419!2sgt!4v1691454727964!5m2!1ses-419!2sgt"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <form action="contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
    <div class="row crdbody">
        <div class="col-xl-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
        </div>
        <div class="col-xl-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div>
    </div>
    <div class="row crdbody">
        <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" required>
        </div>
    </div>
    <div class="row crdbody">
        <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-success"><i class="fa-solid fa-paper-plane"></i>Enviar</button>
</form>
                <!--End Contact Form -->

            </div>
        </section><!-- End Contact Section -->
    </div>



    <script src="https://kit.fontawesome.com/d3fd75469a.js" crossorigin="anonymous"></script>s
    <!--aqui termina el card-->

</body>

</html>