<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Rapel - Hardcalize</title>
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
               <h1>Rapel</h1>
               <a class="button s-12 l-2 center" href="../locais/rapel.php">Onde Praticar</a>  
            </div>
         </div>
          <div id="content">
			<center> <img src="../img/rapel.jpg"/> </center> <br><br>
            <div class="line">
               <div class="margin">
               
               <!-- <img src="../img/skate_con.jpg" align"center"> -->
               
               <p class="s-12 m-12 l-8 center">De acordo com pesquisadores, o rapel foi inventado em 1879, por um francês chamado Jean Charlet-Stranton e seus companheiros Prosper Payo e Frederic Folliguet, durante a escalada do Petit Dru, um paredão de rocha, coberta de gelo e neve, perto de Charmonix, na França.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">A palavra rapel significa “chamar” ou “recuperar” e surgiu quando seu criador explicava a técnica depois de superar o monte: "je tirais vivement par ses bouts la corde qui, on se le rappelle...." que quer dizer em tradução livre "Quando chegava perto de meus companheiros eu puxava fortemente a corda por uma de suas pontas e assim a trazia de volta para mim...", ou seja, durante a atividade, ele mantinha a corda presa vigorosamente em sua mão, e se escapasse de um lado, seria retida do outro.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">No Brasil, este esporte ainda é novo e surgiu há 15 anos com a profissão de espeleologia, ou seja, por pessoas que descem por cordas para explorar cavidades naturais, como grutas, cavernas, fontes entre outros, de forma profissional. Somente nos últimos anos é que tem sido praticado com a finalidade esportiva.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Infelizmente, no Brasil ainda não há uma Confederação que congregue os praticantes do rapel, mas os rapeleiros, como são chamados, se confraternizam com frequência, através de algumas associações criadas em cidades como Bahia, Minas Gerais e São Paulo.
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