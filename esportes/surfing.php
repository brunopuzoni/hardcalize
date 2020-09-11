<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Surfing - Hardcalize</title>
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
               <h1>Surfing</h1>
               <a class="button s-12 l-2 center" href="../locais/surfing.php">Onde Praticar</a>  
            </div>
         </div>
          <div id="content">
            <div class="line">
<center><img src="../img/surf_con.jpeg"></center><br><br>
               <div class="margin">
               <p class="s-12 m-12 l-8 center">Surfe é um esporte individual, radical, praticado no mar. No surfe, o desafio é se manter o maior tempo possível em pé sob uma prancha, deslizando sob as ondas e realizando manobras radicais, com vários níveis de dificuldade.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Não se sabe ao certo quando surgiu o surfe, pois há poucos relatos, mas alguns historiadores defendem a ideia de que surgiu nas Ilhas Polinésias quando os nativos saiam para pescar e, para voltar mais rápido à terra firme, deslizavam com seus barcos através das ondas. Com o passar do tempo esta atividade tornou-se hábito entre estas civilizações. Outras teorias defendem a África ocidental como o berço do surfe.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Posteriormente, os reis das ilhas do Hawaii passaram a praticar este esporte com pranchas feitas de madeira retiradas de árvores locais. Foi no Hawai que o surfe tornou-se uma cultura.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Porém, com a chegada dos europeus as ilhas em 1778, o surfe, assim como todos os traços culturais dos nativos foram sendo oprimidos. No inicio do século XX, o surfe ressurgiu aos poucos, devido ao interesse dos estrangeiros em aprender o esporte. Em 1908 foi fundado o clube “The Hawaiian Outrigger Surf and Canoe Club”.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">A divulgação deste esporte se deve a um campeão olímpico de natação do Havai chamado Duke Kahanamoku. Aproximadamente no ano de 1920 começaram a surgir os primeiros campeonatos nos Estados Unidos, na Califórnia.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">A fabricação da primeira prancha de fibra data de 1949 e foi feita por Bob Simons. A partir de 1960 o surf o surf tornou-se um esporte profissional. Hoje a ASP (Association of Surfing Professionals) é quem realiza e organiza o circuito mundial de surf.
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
</body>
</html>