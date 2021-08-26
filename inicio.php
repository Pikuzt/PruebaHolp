<?php
/* 
Template Name: Home
Description: Prueba

*/
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /css/normalize.css">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/css/skeleton.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <title>HOME</title>
</head>

<body>


    <header class="presentacion">
        <div class="logo">
            <img src="./img/logotiporealiza.png" alt="" srcset="">
        </div>


        <div class="datos">
            <nav class="menuInfomacion">
                <ul>
                    <li>
                        <p class="text-menu"> <i class="fas fa-phone-square-alt"></i> (81) 1234-5678</p>
                    </li>
                    <li>
                        <p class="text-menu"> <i class="fas fa-envelope"></i>ventas@realiza.mx</p>
                    </li>
                    <li> <img class="icon_band" src="<?php echo get_template_directory_uri(); ?>/img/mexico.png" alt="" srcset=""> <img class="icon_band"
                            src="./img/mexico.png" alt="" srcset=""></li>
                </ul>
            </nav>
        </div>
        </div>

        <div class="menu_central">
            <nav>
                <ul>
                    <li>Nosotros</li>
                    <li>Diseño Arquitectonico</li>
                    <li>Construccion</li>
                    <li>Maquinaria</li>
                    <li>Transporte</li>
                    <li>Proyectos</li>
                    <li>Contacto</li>
                </ul>
            </nav>
        </div>

    </header>

    <section class="banner">
        <div class="texto"> <strong> TU PROYECTO </strong>
            EN LAS MEJORES MANOS <strong> . </strong>
            <p class="box-info">ME INTERESA CONOCER MAS ></p>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="" srcset="">

        <div class="banner-button">
            <p>
                COONTRUYENDO SOLUCIONES <br> ESTRATEGICAS <strong> DESDE 1999</strong>
            </p>

        </div>
    </section>

    <section class="unidades">
        <div class="container">
            <div class="row">
                <div class="three columns">
                    <img class="img-res value-multiplier" src="./img/coche.jpg" alt="" srcset="">
                    <h5 class="value-heading">UNIDAD DE NEGOCIO</h5>
                    <hr>
                    <p class="">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut dolorem pariatur placeat deserunt!
                        Quos sapiente iusto doloremque architecto dolore maxime unde voluptatem incidunt ex, libero a
                        quod nemo, laboriosam accusamus.
                    </p>
                    <button class="button-primary" style="background-color: orangered;">Mas informacion ></button>
                </div>

                <div class="three columns">
                    <img class="img-res value-multiplier" src="./img/coche.jpg" alt="" srcset="">
                    <h5 class="value-heading">UNIDAD DE NEGOCIO</h5>
                    <hr>
                    <p class="">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut dolorem pariatur placeat deserunt!
                        Quos sapiente iusto doloremque architecto dolore maxime unde voluptatem incidunt ex, libero a
                        quod nemo, laboriosam accusamus.
                    </p>
                    <button class="button-primary">Mas informacion ></button>
                </div>

                <div class="three columns">
                    <img class="img-res value-multiplier" src="./img/coche.jpg" alt="" srcset="">
                    <h5 class="value-heading">UNIDAD DE NEGOCIO</h5>
                    <hr>
                    <p class="">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut dolorem pariatur placeat deserunt!
                        Quos sapiente iusto doloremque architecto dolore maxime unde voluptatem incidunt ex, libero a
                        quod nemo, laboriosam accusamus.
                    </p>
                    <button class="button-primary">Mas informacion ></button>
                </div>

                <div class="three columns">
                    <img class="img-res value-multiplier" src="./img/coche.jpg" alt="" srcset="">
                    <h5 class="value-heading">UNIDAD DE NEGOCIO</h5>
                    <hr>
                    <p class="">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut dolorem pariatur placeat deserunt!
                        Quos sapiente iusto doloremque architecto dolore maxime unde voluptatem incidunt ex, libero a
                        quod nemo, laboriosam accusamus.
                    </p>
                    <button class="button-primary">Mas informacion ></button>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="video">
        <div class="yotube">

            <iframe width="600" height="500 !important" src="https://www.youtube.com/embed/qguejvieRQo"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

        </div>
        <img src="./img/fondo.png" alt="">
    </section>

    <section class="proyecto">
        <div class="container">
            <div class="row">
                <dir class="eleven columns TITLE">
                    <h5>
                        NUESTROS <strong>PROYECTOS</strong>
                    </h5>
                    <hr>
                </dir>
            </div>
            <div class="row">
                <div class="four columns">
                    <img class="img-res value-multiplier" src="<?php echo get_template_directory_uri(); ?>/img/coche.jpg" alt="" srcset="">
                </div>
                <div class="four columns">
                    <img class="img-res value-multiplier" src="<?php echo get_template_directory_uri(); ?>/img/coche.jpg" alt="" srcset="">
                </div>
                <div class="four columns">
                    <img class="img-res value-multiplier" src="<?php echo get_template_directory_uri(); ?>/img/coche.jpg" alt="" srcset="">
                </div>
            </div>
            <div class="row">
                <div class="four columns">
                    <img class="img-res value-multiplier" src="<?php echo get_template_directory_uri(); ?>/img/coche.jpg" alt="" srcset="">
                </div>
                <div class="four columns">
                    <img class="img-res value-multiplier" src="<?php echo get_template_directory_uri(); ?>/img/coche.jpg" alt="" srcset="">
                </div>
                <div class="four columns">
                    <img class="img-res value-multiplier" src="<?php echo get_template_directory_uri(); ?>/img/coche.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="row">
            <dir class="eleven columns TITLE">
                <button class="button-primary" style="background-color: orangered;">MIS PROYECTOS></button>
            </dir>
        </div>
    </section>

    <section class="opcion">
        <div class="fondo">
            <div class="container">
                <div class="row">
                    <dir class="eleven columns TITLE">
                        <h5 style="color:white">
                            ¿POR QUE SOMOS TU <strong style="color: orangered;">MEJOR OPCION</strong>
                        </h5>
                        <hr>
                    </dir>
                    <div class="row">
                        <div class="four columns chek-i">
                            <i class="far fa-check-circle i-check"></i>
                            <br><br>
                            <strong>BENEFICIO</strong>
                        </div>
                        <div class="four columns chek-i">
                            <i class="far fa-check-circle i-check"></i>
                            <br><br>
                            <strong>BENEFICIO</strong>
                        </div>
                        <div class="four columns chek-i">
                            <i class="far fa-check-circle i-check"></i>
                            <br><br>
                            <strong>BENEFICIO</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clientes">
        <div class="container">

            <div class="row">
                <dir class="eleven columns TITLE">
                    <h5>
                        NUESTROS <strong style="color: orangered;">CLIENTES</strong>
                    </h5>
                    <hr>
                </dir>

                <div class="row ">
                    <div class="four columns ">
                        <img class="img-res value-multiplier" src="<?php echo get_template_directory_uri(); ?>/img/banorte.png" alt="" srcset="">
                    </div>
                    <div class="four columns ">
                        <img class="img-res value-multiplier" src="<?php echo get_template_directory_uri(); ?>/img/banorte.png" alt="" srcset="">
                    </div>
                    <div class="four columns ">
                        <img class="img-res value-multiplier" src="<?php echo get_template_directory_uri(); ?>/img/banorte.png" alt="" srcset="">
                    </div>
                </div>
            </div>
    </section>

    <footer class="contacto">
        <div class="container">
            <div class="row ">
                <div class="six columns map-responsive " style="height: 250px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3594.574354933054!2d-100.32897738589796!3d25.71851328365642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866295b579e2b33b%3A0x8e33d96101967fee!2sPlutarco%20El%C3%ADas%20Calles%201237%2C%20Ni%C3%B1o%20Artillero%2C%2064280%20Monterrey%2C%20N.L.!5e0!3m2!1ses!2smx!4v1629967038258!5m2!1ses!2smx"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="six columns  ">
                    <address>
                        <i class="fas fa-map-marker-alt"></i> Plutarco Elias Calles #1237 Col.Niño Artillero, C.P.
                        64280, Monterrey<br>
                        Nuevo Leon, Mexico<br>
                        <i class="fas fa-phone-alt"></i> +52 (81) 2473-9133 +52(81) 2473-5675<br>
                        <i class="fas fa-envelope"> </i> info@realiza.mx<br>

                    </address>
                </div>
            </div>



        </div>
        </div>

        <div class="footer_final">
            <div class="row">
                <dir class="seven columns icon-footer ">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>


                </dir>

                <dir class="five columns derechos ">
                    <strong class="derechos">Derechos reservados 2017 <br>
                        Aviso de privacidad</strong>
                </dir>


                </dir>
            </div>

    </footer>
</body>

</html>