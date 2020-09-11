<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Hardcalize</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link rel="stylesheet" href="css/jquery-ui.css">
	  <link rel="stylesheet" href="css/jquery-ui.min.css">
      <link rel="stylesheet" href="css/bootstrap-iso.css">

      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="css/template-style.css">
      <link href="css/font.css" rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <link rel="icon" href="img/icon/favicon.ico">
   
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
   
   <!-- <script type="text/javascript">
   function beta(){
	   alert('Versão BETA do site. \nFaça o Cadastro e relate qualquer bug!');
   }
   
   </script> -->
   
   <div class="invi">
   	<?php
		require_once("crud/config.php");
		session_start();
	    if (!empty($_SESSION['login_user'])){
			$_SESSION['confirmaLogin'] = 1;
		}
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
                        <li><div class="hide-l"><a href="index.php">Home</a></div></li>
                        <li><a href="about.php">Sobre a equipe</a>
                        </li>
                        <li><a href="locais.php">Onde Praticar</a>
                        </li>
                        <li>
                        <a>&nbsp;Esportes</a>
                        <ul>
                        	<li><a href="esportes/skate.php">Skate</a></li>
							<li><a href="esportes/escalada.php">Escalada</a></li>
							<li><a href="esportes/bungeejump.php">Bungee Jump</a></li>
							<li><a href="esportes/rafting.php">Rafting</a></li>
							<li><a href="esportes/paraquedismo.php">Paraquedismo</a></li>
							<li><a href="esportes/surfing.php">Surfing</a></li>
                            <li><a href="esportes/rapel.php">Rapel</a></li>
                            <li><a href="esportes/muaythai.php">Muay Thai</a></li>
                            <li><a href="esportes/mma.php">MMA</a></li>
                            <li><a href="esportes/motocross.php">Motocross</a></li>
                            <li><a href="esportes/balonismo.php">Balonismo</a></li>
                            <li><a href="esportes/parkour.php">Parkour</a></li>
                        </ul>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m active-item"><a href="index.php">Hard <br/><strong>calize</strong></a>
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        <li>
                        <a href="contato.php">Contato</a>	
                        </li>
                        <li>
							<a>Cadastro</a>
                        <ul>
                        	<li><a href="cadastro_usuario.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a href="cadastro_empresa.php">Empresa&nbsp;</a></li>
                        </ul>
                        
						<?php
						
						if (!empty($_SESSION['login_user'])){ 
						?>
						
						<li><a href="logout.php">Logout</a></li>
                        <?php
						}
						else { ?>
                        <li>
                        <a>Login</a>
                        	<ul>
							<li><a href="login.php">&nbsp;&nbsp;Usuário&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                            <li><a href="login_empresa.php">Empresa</a></li>
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
         <!-- CAROUSEL -->  	
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
               <div class="item">
                  <img src="img/first1.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 m-12 l-9">
                        <p> Hardcalize </p>
                        </div>
                        <div class="s-12 m-12 l-9">
                        <?php 
						if (!empty($_SESSION['login_user'])){
						?> 
                        <h2> 
							<?php	
								echo "Seja bem vindo, " . $_SESSION['login_user'] . "!";}
							?>
                        </h2>
						
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/first2.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                        </div>
                        <div class="s-12 l-9">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/first3.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                        </div>
                        <div class="s-12 l-9">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- SOBRE O SITE --> 	
         <div id="first-block">
            <div class="line">
               <h2>Sobre o site</h2>
               <p class="subtitile">O que você pode fazer em nosso site?
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-high_voltage icon2x"></i>
                     <h3>Esportes</h3>
                     <p>Pesquise sobre um determinado esporte radical para saber como é praticado.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-placepin icon2x"></i>
                     <h3>Localidades</h3>
                     <p> Aqui você encontrará locais para a pratica do seu esporte radical favorito!
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
					 <i class="icon-message icon2x"></i>
                     <h3>Feedback</h3>
                     <p> Caso tenha alguma sugestão, ou descobriu alguma má funcionalidade do site, comunique-nos com sua crítica!
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
					 <a href="contato.php"><i class="icon-mail icon2x"></i></a>
                     <h3>Contato</h3>
                     <p> Empresas que estiverem interessadas na divulgação de seus serviços, entre em contato conosco em nosso email.
                     </p>
                  </div>
               </div>
            </div>
         </div>
		 
		 
         <!-- ANUNCIOS -->
         <div id="third-block">
            <div class="line">
               <div class="margin">
                  <p align="center"><img src="img/anuncio/ADPARTY_2.gif"></p>
               </div>
            </div>
         </div>
                  
         
         <!-- SOBRE A EQUIPE --> 	
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 m-8 l-8 center">
                        <h1>Sobre a equipe</h1>
                        <p class="margin-bottom">Criado por estudantes da ETEC Professora Maria Cristina Medeiros, o site foi desenvolvido como Trabalho de Conclusão de Curso.
                        </p>
                        <a class="button s-6 l-4 center" href="about.php">Saiba mais</a> 
                        <br>             
                                       
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <!-- SOBRE OS ESPORTES --> 	
         <div id="third-block">
            <div class="line">
               <h2>Esportes Radicais</h2>
               <p class="subtitile">Saiba mais sobre os esportes radicais!
               </p>
               <div class="margin">
               		
                  <div class="s-12 m-6 l-3">
                     <a href="esportes/skate.php"><img src="img/skate.jpg"></a>
                         
                      <p class="subtitile"><a href="esportes/skate.php">Skateboard</a>
                      </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <a href="esportes/escalada.php"><img src="img/escalada.jpg"></a>      
                      <p class="subtitile"><a href="esportes/escalada.php">Escalada</a>
                      </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <a href="esportes/paraquedismo.php"><img src="img/paraquedas.jpg"></a>      
                      <p class="subtitile"><a href="esportes/paraquedismo.php">Paraquedismo</a>
                      </p>
                  </div>
                 <div class="s-12 m-6 l-3">
                     <a href="esportes/surfing.php"><img src="img/surf.jpg"></a>      
                      <p class="subtitile"><a href="esportes/surfing.php">Surfing</a>
                      </p>                                      
                   </div>
				</div>
            </div>

               
               <a class="button s-6 l-3 center" href="esportes.php">Veja Outros </a>
         </div>
         
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-2 right">
               <p>Hardcalize ©, 2017</p>
            </div>
         </div>
      </footer>

      
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
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
   </body>
</html>