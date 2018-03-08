<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <style>
        .preloader-background {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #eee;
            
            position: fixed;
            z-index: 100;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;	
        }
        .teste-action-btn{
                position:fixed;
                right:23px;
                bottom:23px;
                padding-top:15px;
                margin-bottom:0;
                z-index:1}
      </style>
    </head>

    <body>
        <!-- Configuração do Preload - Estou usando o Preload que muda de cor e é exeuctado por 3 segundos antes de abrir a página-->
        <div class="preloader-background">
            <!-- Tamanho do circulo - BIG - Podendo ser Small -->
            <div class="preloader-wrapper big active">
                <!-- Cor numero 01 -->
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <!-- Cor numero 02 -->
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <!-- Cor numero 03 -->
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- A partir daqui pode ter a página normalmente -->
        <div class="main">
            <nav>
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo center" onclick="$('.tap-target').tapTarget('open')">Logo</a>
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="sass.html">Item</a></li>
                        <li><a href="badges.html">Item</a></li>
                        <li><a href="collapsible.html">Item</a></li>
                    </ul>
                </div>
            </nav>
        </div>


        <div claas="row">
            <div class="teste-action-btn">
                <!-- Element Showed -->
                <a id="menu" class="waves-effect red lighten-2 btn btn-floating" onclick="$('.tap-target').tapTarget('open')" >
                    <i class="material-icons">menu</i></a>

                <!-- Tap Target Structure -->
                <div class="tap-target" data-activates="menu">
                    <div class="tap-target-content">
                        <h5>Teste</h5>
                        <p>Texto do teste</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- A página vem até aqui - MAIN -->

        <!-- Configuracao do tempo que o Preload estará sendo executado -->
        <script>
            document.addEventListener("DOMContentLoaded", function(){
                $('.preloader-background').delay(3000).fadeOut('slow');

                $('.preloader-wrapper')
                    .delay(3000)
                    .fadeOut();
            });
        </script>

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        
    </body>
  </html>