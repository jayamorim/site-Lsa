<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="LSA Medical Printing dispõe de uma gama completa de produtos e serviços especializados somente em diagnóstico por imagem. Atendemos hospitais, clínicas, centros de diagnósticos, laboratórios, com projetos de sucesso e referência em toda capital de Pernambuco, agreste, sertão, estados da Paraíba, Rio Grande do Norte, entre outros.">
    <meta name="author" content="adaptacomunicacao.com.br">
    <meta name="format-detection" content="telephone=no">
    <title>LSA - Medical Printing</title>    

    <!--favicon icon-->
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="imagens/favicon/site.webmanifest">
    <link rel="mask-icon" href="imagens/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!--PRELOADER-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/logo-color.png" alt="logo" class="img-fluid" />
            <div class="thecube">
                <div class="cube c1"></div>
                <div class="cube c2"></div>
                <div class="cube c4"></div>
                <div class="cube c3"></div>
            </div>
        </div>
    </div>
    <!--PRELOADER-->

    <?php 
        include ('modelo/menu_impressoras.php');
        include ('controle/links_impressoras.php');
        include ('modelo/rodape.php'); 
    ?>    

    <!--scroll bottom to top button start-->
    <div class="scroll-top scroll-to-target primary-bg text-white" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </div>
    <!--scroll bottom to top button end-->

    <!--Scroll WhatsApp-->
    <a href="https://api.whatsapp.com/send?phone=558130494266" target="_blank">        
        <img  class="whatsapp" src="assets/img/icon-whatsapp.png" width="80" height="80" />
    </a>
    <!--Scroll WhatsApp--> 
     
    <style type="text/css">
        .whatsapp {
        position: fixed;
        top: 89%;
        left:1%; 
        padding: 10px;
        z-index: 10000000;
        }
    </style>

    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendors/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <script src="assets/js/vendors/jquery.easing.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/countdown.min.js"></script>
    <script src="assets/js/vendors/jquery.waypoints.min.js"></script>
    <script src="assets/js/vendors/jquery.rcounterup.js"></script>
    <script src="assets/js/vendors/magnific-popup.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>
</html>