<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Bungee Jump - Hardcalize</title>
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
               <h1>Bungee Jump</h1>
               <a class="button s-12 l-2 center" href="../locais/bungeejump.php">Onde Praticar</a>  
            </div>
         </div>
          <div id="content">
            <div class="line">
<center><img src="../img/bungjump_con.jpg" align"center"></center><br><br>

               <div class="margin">
               <p class="s-12 m-12 l-8 center">A prática do Bungee Jump pode ser traduzida como saltar no vazio de lugares altos e inusitados com uma corda elástica presa aos pés, podendo sua base ser de uma ponte, viadutos, helicópteros, guindastes, balões de ar quente ou até mesmo de plataformas metálicas.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Os jovens saltavam de torres de bambu com cipós amarrados aos tornozelos para suavizar a queda. A moderna prática do Bungee Jump só ficou mais conhecida em 1987, quando um grupo de esportistas pioneiros saltou da Torre Eiffel, em Paris.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Em 1988 surgiu, em Ohakune, na Nova Zelândia, o Bungee Jump comercial, criado por A. J. Hackett. Atualmente é administrado em âmbito internacional pelas entidades: North American Bungee Association–NABA; United States Bungee Association–USBA; Nova Zelândia– SANZ; The British Elastic Rope Sports Association-BERSA.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">No Brasil é praticado desde 1993 pela empresa Adrena, formada pelos irmãos Lico e Fabio Shoel, que são jumpmasters formados pela Adrenalin Dreams Adventures–USA desde 1996, recordistas brasileiros de bungee jump em pontes e fundadores da Associação Brasileira de Bungee Jump-ABBJ, em São Paulo.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Atualmente é praticado como lazer e com história recente no país, o bungee jump é utilizado também em eventos promocionais para atrair a atenção do público, como o Bungee Jump Halls (Florianópolis-SC, Santos e Caraguatatuba-SP e Capão da Canoa-RS) e o Osklen Bungee Expedition, na Ponte do Vale da Esperança-SP. Por seu alto impacto, muitos se contentam em assistir aos poucos aventureiros.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">A principal referência para a prática está localizada na Ponte de Paulo Afonso, Bahia. Filiadas à ABBJ, as empresas: Maxtreme, Adrena Eventos & Expedições, Adrena Mil Bungee Jump e Team Extreme, operam diretamente no esporte. A equipe Adrena registra mais de 50 mil saltos desde 1996 e já realizou mais de 100 eventos no território nacional.
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