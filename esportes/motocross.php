<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Motocross - Hardcalize</title>
      <link rel="stylesheet" href="../css/components.css">
      <link rel="stylesheet" href="../css/responsee.css">
      <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
      <link rel="stylesheet" href="../css/jquery-ui.css">
	  <link rel="stylesheet" href="../css/jquery-ui.min.css">
      <link rel="stylesheet" href="../css/bootstrap-iso.css">

      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="../css/template-style.css">
      <link href="../css/font.css" rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="../js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="../js/modernizr.js"></script>
      <script type="text/javascript" src="../js/responsee.js"></script>
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
               <h1>Motocross</h1>
               <a class="button s-12 l-2 center" href="../locais/motocross.php">Onde Praticar</a>  
            </div>
         </div>
          <div id="content">
            <div class="line">
				<center><img src="../img/motocross.jpg" align"center"></center><br><br>

               <div class="margin">
               <p class="s-12 m-12 l-8 center">Na História do Motocross temos de nos reportar à Inglaterra pelos finais dos anos de 1890, onde a pacata moda de pilotar pelo campo começou. Os motociclistas da época correndo com suas motos entre árvores e pelo leito seco dos riachos acabaram gerando competições acirradas.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">A primeira prova de motociclismo que se tem conhecimento aconteceu no dia 29 de novembro de 1897, em Surrey, subúrbio de Londres, na Inglaterra. A prova, chamada de Motorcycle Scrambles (Subidas de Motocicleta) foi o nascimento do motociclismo de competição que ainda não tinha a separação entre Motovelocidade e Motocross. Aliás, os ingleses criaram a expressão "Se existe alguma coisa melhor que motocicleta, Deus guardou-a para si no céu" ("If there is anything better than a motorbike, God must have kept for him in heaven").
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Segundo a História e muitos relatos, a partir desta prova foi criado um circuito fechado com relevo natural na terra entre subidas, decidas, barrancos, curvas e obstáculos dos mais diversos tipos, continuando com o nome de Scramble (Subida). Após a maior difusão e maior prática da modalidade pela Europa, foi em meados de 1920, quando começou a ser conhecido na Holanda e Bélgica, que a modalidade ganhou o nome de Motocross.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">No início, o esporte era praticado com máquinas inglesas derivadas das motos de turismo de série, que embora modificadas, ainda eram muito pesadas e pouco ágeis. Relata a História que foi um piloto inglês quem construiu a primeira motocicleta específica para a modalidade, uma moto esportiva com adaptações para o Motocross. A primeira competição internacional foi na França, em 1939, mas por muito tempo o Motocross não seria reconhecido internacionalmente como esporte. Em 1957 a Federação Internacional de Motociclismo, que havia sido criada em 22 de dezembro de 1904, organizou o 1º Campeonato Mundial de Motocross.
               </p>
              
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
</body>
</html>