<!DOCTYPE html>


<?php
require_once('/home/u634332082/public_html/classes/system.class.php');


$entro = false;

if (isset($_POST) && $_POST['action'] == 'deja_datos') {

    $entro = true;
    // System::print_pre($_POST);
    $de = "consultas@web-lucas.com";
    $password = "qweasd-26";
    $denombre = "Web Lucas";
    $enviara = "lucasmarionilm@gmail.com";
    $cc = "";
    $cc1 = "";
    $cco = "";
    $asunto = 'Nuevo Dato';
    $cuerpo = "NUEVO DATO:<br><br>";
    $respondera = "";
    foreach ($_POST as $key => $value) {
        $cuerpo .= '<b>' . $key . ': </b>' . $value . '<br><br>';
    }
    //    System::print_pre('22');
    $rta = System::enviar_email_SMTP($de, $password, $denombre, $enviara, $asunto, $cuerpo, $cc, $cco, $respondera);
    //  System::print_pre($rta);
}
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Diseñamos el sitio web que tienes en mente. Aparece primero en todos los buscadores. Aumenta tus ventas">
        <meta name="title" content="Lucas Web - Desarrollo web">
        <meta name="author" content="Lucas Marioni">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">


        <title>LucasWeb - Diseño y Desarrollo </title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/Chart.js"></script>



        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119123368-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-119123368-1');
        </script>
    </head>

    <body data-spy="scroll" data-offset="0" data-target="#theMenu">

        <!-- Menu -->
        <nav class="menu" id="theMenu">
            <div class="menu-wrap">
                <h1 class="logo"><a href="index.html#home">LUCASWEB</a></h1>
                <i class="icon-remove menu-close"></i>
                <a href="#home" class="scroll">Home</a>
                <a href="#services" class="scroll">Services</a>
                <a href="#about" class="scroll">About</a>
                <a href="#contact" class="scroll">Contact</a>
                <!--<a href="#"><i class="icon-facebook"></i></a>
                <a href="#"><i class="icon-twitter"></i></a>
                <a href="#"><i class="icon-dribbble"></i></a>
                <a href="#"><i class="icon-envelope"></i></a>-->
            </div>

            <!-- Menu button -->
            <div id="menuToggle"><i class="icon-reorder"></i></div>
        </nav>



        <!-- ========== HEADER SECTION ========== -->
        <section id="home" name="home"></section>
        <div id="headerwrap">
            <div class="container">
                <br>
                <h1>Lucas Web</h1>
                <h2>Diseño y Desarrollo WEB</h2>
                <h3 style='color:white;'>Gracias por contactarte conmigo!</h3>
                <h3 style='color:white;'>En instantes me pongo en contacto</h3>
                <div class="row">
                    <br>
                    <br>
                    <br>
                    <div class="col-lg-6 col-lg-offset-3">
                    </div>
                </div>
            </div><!-- /container -->
        </div><!-- /headerwrap -->


        <!-- ========== WHITE SECTION ========== -->
        <div id="w">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h3>TE GUSTARÍA TENER UN <bold>SITIO</bold> COMO ESTE?<br/>
                            QUERÉS AUMENTAR TUS <bold>VENTAS?</bold> <br/>ENTONCES, <a href="#contact">CONTACTATE CONMIGO</a>.
                            <br>
                            <a href="https://api.whatsapp.com/send?phone=541133241696" class="open-btn" id="addClass"><i class="fab fa-whatsapp" aria-hidden="true"></i> escribime por whatsapp</a>
                        </h3>
                    </div>
                </div>
            </div><!-- /container -->
        </div><!-- /w -->

        <!-- ========== SERVICES - GREY SECTION ========== -->
        <section id="services" name="services"></section>
        <div id="g">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3">
                        <img style='width: 75%;' src="assets/img/3861.png">
                        <h3>Diseños WEB</h3><br>
                        <p>Creación de sitios, landing pages, blogs, CMS adaptados a tu medida.</p>
                    </div>
                    <div class="col-lg-3">
                        <img style='width: 75%;' src="assets/img/3863.png">
                        <h3>Tiendas Online</h3><br>
                        <p>Comienza a publicar y vender tus productos con una tiena online, aumentado tus clientes potenciales.</p>
                    </div>
                    <div class="col-lg-3">
                        <img style='width: 75%;' src="assets/img/3865.png">
                        <h3>Aplicaciónes Web</h3><br>
                        <p>Adopta los sistemas y herramientas que mas se adapten a vos o tu empresa.</p>
                    </div>
                    <div class="col-lg-3">
                        <img style='width: 75%;' src="assets/img/3864.png">
                        <h3>Posicionamiento en Buscadores</h3>
                        <p>Mejora la posición de tu empresa en los resultados de los mejores buscadores.</p>
                    </div>
                </div>
            </div><!-- /container -->
        </div><!-- /g -->

        <!-- ========== CHARTS - DARK GREY SECTION ========== 
        <div id="dg">
                <div class="container">
                        <div class="row">
                                <h3>SOME CHARTS</h3>
                                <br>
                                <br>
                                <div class="col-lg-4">
                                        <canvas id="javascript" height="130" width="130"></canvas>
                                        <br>
                                        <h4>Javascript</h4>
                                        <br>
                                        <script>
                                                var doughnutData = [
                                                                {
                                                                        value: 70,
                                                                        color:"#f85c37"
                                                                },
                                                                {
                                                                        value : 30,
                                                                        color : "#ecf0f1"
                                                                }
                                                        ];
                                                        var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
                                        </script>

                                </div>
                                <div class="col-lg-4">
                                        <canvas id="bootstrap" height="130" width="130"></canvas>
                                        <br>
                                        <h4>Bootstrap</h4>
                                        <br>
                                        <script>
                                                var doughnutData = [
                                                                {
                                                                        value: 90,
                                                                        color:"#f85c37"
                                                                },
                                                                {
                                                                        value : 10,
                                                                        color : "#ecf0f1"
                                                                }
                                                        ];
                                                        var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
                                        </script>
                                </div>
                                <div class="col-lg-4">
                                        <canvas id="wordpress" height="130" width="130"></canvas>
                                        <br>
                                        <h4>Wordpress</h4>
                                        <br>
                                        <script>
                                                var doughnutData = [
                                                                {
                                                                        value: 55,
                                                                        color:"#f85c37"
                                                                },
                                                                {
                                                                        value : 45,
                                                                        color : "#ecf0f1"
                                                                }
                                                        ];
                                                        var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
                                        </script>
                                </div>
                        
                        </div>	
                </div><!-- /container -->
    </div><!-- /dg -->

    <section id="portfolio" name="portfolio"></section>
    <div id="portfoliowrap">
        <div class="container">
            <div class="row">

                <div class="col-lg-2 col-lg-offset-1 col-xs-6 port-space">
                    <a href="item.html" style='font-size: 150px;'><i class="fab fa-html5"></i></a>
                </div>
                <div class="col-lg-2 col-xs-6 port-space">
                    <a href="item.html" style='font-size: 150px;color:#D86F9C;'><i class="fab fa-sass"></i></a>
                </div>
                <div class="col-lg-2 col-xs-6 port-space">
                    <a href="item.html" style='font-size: 150px;color:#F3DF50;'><i class="fab fa-js"></i></a>
                </div>	
                <div class="col-lg-2 col-xs-6 port-space">
                    <a href="item.html" style='font-size: 140px;color:#787CAF;'><i class="fab fa-php"></i></a>
                </div>	
                <div class="col-lg-2 col-xs-12 port-space">
                    <a href="item.html" style='font-size: 150px;color:#DF9545;'><i class="fab fa-aws"></i></a>
                </div>	
            </div>	
        </div><!-- /container -->
    </div><!-- /portfoliowrap -->
    <div id="w2" style="background-color: white;">
        <div class="container">
            <div class="row" style="padding-top: 40px;padding-bottom: 30px;">
                <div class="col-lg-4 col-lg-offset-1" >
                    <img class="img-circle" src="assets/img/seo.jpg" style="width: 100%" >
                </div>
                <div class="col-md-7 text-center">
                    <br>
                    <h2 style="font-size: 3em;font-weight: 900;color: #black;">MI SITIO</h2> 
                    <h2 style="font-size: 3em;font-weight: 900;color: #f85b37;"> PRIMERO EN GOOGLE</h2>
                    <h4>Incrementa tus clientes</h4>
                    <h4>Mayor presencia que tu competencia</h4>
                    <h4>Maximiza tus ventas</h4>
                </div>
            </div>
        </div><!-- /container -->
    </div><!-- /w -->

    <div id="w" style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" >
                    <h3 style="color:white;">HABLÁ CONMIGO Y <bold style="color:#f85a37;">PEDÍME</bold> UNA MUESTRA <bold style="color:#f85a37;">GRATIS</bold>.
                    </h3>
                </div>
            </div>
        </div><!-- /container -->
    </div>


    <!-- ========== WHITE SECTION ========== 
    <div id="w">
            <div class="container">
                    <div class="row">
                            <div class="col-lg-8 col-lg-offset-2" >
                            <h3>I WORK HARD TO DELIVER A <bold>HIGH QUALITY SERVICE</bold>. MY AIM IS YOUR COMPLETE <bold>SATISFACTION</bold>.
                            </h3>
                            </div>
                    </div>
            </div><!-- /container -->
</div><!-- /w -->
<!-- ========== ABOUT - GREY SECTION ========== -->
<section id="about" name="about"></section>
<div id="g">
    <div class="container">
        <div class="row">
            <!--<h3>SOBRE MI</h3>-->

            <!--<div class="col-lg-2"></div>-->
            <!--<div class="col-lg-8">-->
            <!--<p> Aca una descripcion de mi: soy el intento de flaco pero en version gorda que va de lunes a sabados a crossfit pero no adelgazo </p>-->

            <!--</div>-->

            <div class="col-lg-4 col-md-offset-4 team">
                <img class="img-circle" src="assets/img/lucas1.jpg" height="120" width="120">
                <h4>Lucas Marioni</h4>
                <h5><i>Full-Stack Developer</i></h5>
                <p>I'm Full-Stack developer with 5 years of professional experience. </p>
                <p style="font-size: 1.5em;color: orange;">
                    <i class="fas fa-star"></i>
                </p>
                <a href="https://api.whatsapp.com/send?phone=541133241696" class="open-btn" id="addClass"><i class="fab fa-whatsapp" aria-hidden="true"></i> escribime por whatsapp</a>
            </div>
        </div>
    </div><!-- /container -->
</div><!-- /g -->

<!-- ========== FOOTER SECTION ========== -->
<section id="contact" name="contact"></section>
<div id="f">
    <div class="container">
        <div class="row">
            <h3 style="margin-bottom: 50px;margin-top: 0px;"><b>CONTACT ME</b></h3>
            <!--					<h3><b>CONTACT US</b></h3>
                                                    <br>-->
            <div class="col-lg-4 col-md-offset-2 text-left">

                <!--<h3><b>Send Us A Message:</b></h3>-->

                <h3><i class="fas fa-envelope"></i> lucasmarionilm@gmail.com</h3>

                <h3><i class="fab fa-whatsapp"></i> +54 11 3324-1696</h3>

                <h3><i class="fas fa-map-marker"></i> Buenos Aires (ARG)</h3>

                <br>


            </div>

            <!--					<div class="col-lg-4">
                                                            <h3><b>We Are Social</b></h3>
                                                            <p>
                                                                    <a href="index.html#"><i class="icon-facebook"></i></a>
                                                                    <a href="index.html#"><i class="icon-twitter"></i></a>
                                                                    <a href="index.html#"><i class="icon-envelope"></i></a>
                                                            </p>
                                                            <br>
                                                    </div>-->
            <div class="col-lg-4 text-left" style="color:white;">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Nombre y Apellido *</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Teléfono</label>
                        <input type="number" class="form-control" name="telefono" id="tenefono">
                    </div>
                    <div class="form-group">
                        <label for="consulta">Consulta</label>
                        <textarea class="form-control" id="consulta" name="consulta"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default pull-right">Enviar Consulta</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- /container -->

<div id="c">
    <div class="container">
        <p>Created by <a href="#">LUCASWEB</a></p>

    </div>
</div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/classie.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
