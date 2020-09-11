<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Skating - Hardcalize</title>
      <link rel="stylesheet" href="../css/components.css">
      <link rel="stylesheet" href="../css/responsee.css">
      <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
      <link rel="stylesheet" href="../css/jquery-ui.css">
	  <link rel="stylesheet" href="../css/jquery-ui.min.css">
      <link rel="stylesheet" href="../css/bootstrap-iso.css">
      <link rel="stylesheet" href="../css/jquery.bxslider.css">

      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="../css/template-style.css">
      <link href="../css/font.css" rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="../js/modernizr.js"></script>
      <script type="text/javascript" src="../js/responsee.js"></script>
      <script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
      <link rel="icon" href="../img/icon/favicon.ico">
   
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
   <div class="invi">
   	<?php
		require_once("../crud/config.php");
		session_start();
   ?>
   </div>
      <!-- TOP NAV WITH LOGO -->  
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">Hardcalize</div>                  
                  <p class="nav-text">Menu</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><div class="hide-l"><a href="../index.php">Home</a></div></li>
                        <li><a href="../about.php">Sobre a equipe</a>
                        </li>
                        <li><a href="../locais.php">Onde Praticar</a>
                        </li>
                        <li>
                        <a>&nbsp;Esportes</a>
                        <ul>
                        	<li><a href="skate.php">Skate</a></li>
							<li><a href="escalada.php">Escalada</a></li>
							<li><a href="bungeejump.php">Bungee Jump</a></li>
							<li><a href="rafting.php">Rafting</a></li>
							<li><a href="paraquedismo.php">Paraquedismo</a></li>
							<li><a href="surfing.php">Surfing</a></li>
                            <li><a href="rapel.php">Rapel</a></li>
                            <li><a href="muaythai.php">Muay Thai</a></li>
                            <li><a href="mma.php">MMA</a></li>
                            <li><a href="motocross.php">Motocross</a></li>
                            <li><a href="balonismo.php">Balonismo</a></li>
                            <li><a href="parkour.php">Parkour</a></li>
                        </ul>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m active-item"><a href="../index.php">Hard <br/><strong>calize</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li>
                        <a href="../contato.php">Contato</a>	
                        </li>
                        <li>
							<a>Cadastro</a>
                        <ul>
                        	<li><a href="../cadastro_usuario.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a href="../cadastro_empresa.php">Empresa&nbsp;</a></li>
                        </ul>
                        
						<?php
						
						if (!empty($_SESSION['login_user'])){ 
						?>
						
						<li><a href="../logout.php">Logout</a></li>
                        <?php
						}
						else { ?>
                        <li>
                        <a>Login</a>
                        	<ul>
							<li><a href="../login.php">&nbsp;&nbsp;Usuário&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a href="../login_empresa.php">Empresa</a></li>
                            </ul>
                        </li>	
                            <?php
						}
						?>
		                       
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section>
         <div id="head">
            <div class="line">
               <h1>Skateboard</h1>
               <a class="button s-12 l-2 center" href="../locais/skate.php">Onde Praticar</a>  
            </div>
         </div>
          <div id="content">
			<center> <img src="../img/skate_con.jpg"/> </center> <br><br>
            <div class="line">
               <div class="margin">
               
               <!-- <img src="../img/skate_con.jpg" align"center"> -->
               
               <p class="s-12 m-12 l-8 center">No final da década de 1950, na Califórnia, nos Estados Unidos, surfistas cansados de esperarem por ondas boas decidiram criar algo similar com o surf, porém, sem a utilização da água. Foi então que estes surfistas decidiram pegar as rodinhas de skates (patins) e colocaram em uma madeira que tinha um formato parecido com uma prancha.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">No início, o esporte era chamado de sidewalk surfing (surf de calçada) e em pouco tempo se espalhou por todo os Estados Unidos. A partir de 1963, com o esporte sendo bastante praticado e ter suas próprias manobras e estilos, o nome mudava para Skateboarding, apelidado apenas de skate, como todos nós conhecemos atualmente.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">No ano de 1963, além da oficialização do esporte como skateboarding, foi realizada a primeira competição desta modalidade. O campeonato ocorreu na cidade de Hermosa Beach, na Califórnia, nos Estados Unidos e foi vencido por Larry Stevenson (foto abaixo). Após esta competição, nos três anos seguintes, foram vendidos mais de 50 milhões de skates em todo o mundo. Apenas para destacar, Larry Stevenson foi o fundador da marca Makaha, juntamente com a sua esposa. Os dois produziam os skates manualmente na garagem de sua casa.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Foi na década de 1970 que o skate deu o seu grande salto. Primeiro os skatistas descobriram que nas piscinas que ficaram vazias devido a seca que atingiu a Califórnia, dava para se divertir andando de skate nas paredes delas, pois lembravam as ondas do surf. Em segundo, era inventada em 1974, a rodinha de poliuterano (antes as rodinhas eram feitas de ferro e mais tarde de baquelite, um tipo de plástico duro). Começava então a revolução no skate.
               </p>
               <br>
               <br>

               </div>
               			

            </div>
         </div>
      
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-2 right">
               <p>Hardcalize ©, 2017</p>
            </div>
         </div>
      </footer>

      <script type="text/javascript" src="../owl-carousel/owl.carousel.js">
      </script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           $("#owl-demo").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : false,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : true,
         	singleItem:true
           });
         });	
          
      </script> 
      
      <script type="text/javascript">
    	$(document).ready(function(){
  		$('.bxslider').bxSlider();
		});
      </script> 	
      
</body>
</html>