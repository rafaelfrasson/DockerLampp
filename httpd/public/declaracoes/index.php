<?php 
    require_once "config.php";
    
?>
<!DOCTYPE html>
<html>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Hotsite para Solicitação de documentos acadêmicos">
    <meta name="author" content="Rafael Frasson">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
    
    <!-- Facebook Pixel Code --><script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '686089035393754'); fbq('track', 'PageView');</script><noscript> <img height="1" width="1" src="https://www.facebook.com/tr?id=686089035393754&ev=PageView&noscript=1"/></noscript><!-- End Facebook Pixel Code -->
    <link href="assets/css/index.css" rel="stylesheet">
    
    <head lang="pt-br">
        
        <meta charset="UTF-8">
        <title>:: Solicitação de Documentos Acadêmicos ::</title>
        <script src="assets/js/index.js"> </script>

    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDN9SJG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-ligth sticky-top shadow-sm barra-cor">
          <div class="container">
            
            <a href="?home" class="navbar-brand">
                <image src="assets/image/logo_a.png" height="50rem" style="margin:0.3rem; ">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-info"></i>
            </button>
                
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="ml-auto">
                    <a href="#login" class="btn btn-outline-info"  style="cursor:pointer">Retirar Documento</a>
                    <a href="#bolsas" class="btn btn-outline-info"  style="cursor:pointer">Solicitar Documento</a>
                </div>
            </div>
          </div>
        </nav>

        <div id="corpoajax" class="m-5">

            <div class="container mt-5" id="retirar">
                    <?php
                        include_once 'codigo-de-aprovacao.php';
                    ?>
            </div>
        <!-- Page Content -->
            <div class="container mt-5" id="formulario" style="margin-top: 2rem;">
                <?php
                    include_once 'formulario-de-solicitacao.php';
                ?>    
            </div>
        </div>
        
        
        <!-- Footer -->
        <footer class="page-footer fixed-bottom font-small special-color-dark pt-4" style="background-color: #0062cc;">

            <div class="container">
                <div class="mb-4 text-center">
                      <!-- Facebook -->
                    <a class="fb-ic" href="https://www.facebook.com/fucap/?epa=SEARCH_BOX">
                        <i class="mr-4 material-icons md-light" data-feather="facebook"></i>
                    </a>
                      <!-- Twitter -->
                    <a class="tw-ic" href="https://twitter.com/fucap_edu">
                        <i class="mr-4 material-icons md-light" data-feather="twitter"></i>
                    </a>
                      <!--Linkedin -->
                    <a class="li-ic" href="https://www.instagram.com/fucap_univinte/">
                        <i class="mr-4 material-icons md-light" data-feather="linkedin"></i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic" href="https://br.linkedin.com/in/faculdade-fucap-362825109">
                        <i class="mr-4 material-icons md-light" data-feather="instagram"></i>
                    </a>
                </div>
            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright  text-center text-white py-3" style="background-color: #004085;">
                © <?=$_SESSION['version']?> Copyright: <a class="text-white"  href="https://rafaellfrasson.com.br/"><?=$_SESSION['copyright']?></a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- Jquery -->
        
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.7.1.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script src="assets/js/ajaxpg.js"> </script>
        <script src="assets/js/formulario.js"></script>
        <script>
            
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
            
            feather.replace();
        </script>
    </body>
</html>

