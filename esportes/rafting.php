<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Rafting - Hardcalize</title>
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
               <h1>Rafting</h1>
               <a class="button s-12 l-2 center" href="../locais/rafting.php">Onde Praticar</a>  
            </div>
         </div>
          <div id="content">
<center><img src="../img/rafting_con.jpg"></center><br><br>
            <div class="line">
               <div class="margin">
               <p class="s-12 m-12 l-8 center">A história moderna do rafting teve início em 1842, quando Lieutenant John Fremont, do exército, fez suas primeiras expedições utilizando um barco desenhado por Horace H. Day. O barco possuía quatro compartimentos separados. O nome desse bote era Air Army Boats.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Em 1986, Nataniel Galloway revolucionou as técnicas de rafting mudando a direção do assento do bote, que passou a ficar virado para frente possibilitando encarar de frente as corredeiras e facilitando as manobras.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Durante as duas grandes guerras mundiais, o exército americano passou a reutilizar os botes de borracha, mas dessa vez como botes salva-vidas. Mas foi depois da II Guerra que o rafting teve um grande impulso. Aventureiros na América do Norte passaram a usar os botes excedentes no exército, muito similares aos botes de hoje.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">No Brasil, a história do Rafting é mais recente. Os primeiros botes para corredeira chegaram em 1982 com a criação da primeira operadora de rafting brasileira, a TY-Y Expedições, cujas descidas se restringiam ao rio Paraíba do Sul e rio Paraibuna, ambos em Três Rios / RJ, que atuava na modalidade remo central.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Neste período passou praticamente despercebido pelos brasileiros, pois toda a programação foi desenvolvida para atender exclusivamente aos turistas estrangeiros em férias no Rio de Janeiro.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">O esporte ganhou força a partir de 1990 com a criação da Canoar Rafting & Expedições e com ela uma inovação no rafting brasileiro: a modalidade com remos individuais. A novidade foi introduzida no rio Juquiá, em Juquitiba / SP.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Em 1996, consolidou sua expansão no mercado brasileiro com o surgimento de diversas empresas, localizadas em São Paulo, Santa Catarina e Rio Grande do Sul.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Atualmente, estima-se em 50 o número de operadoras de Rafting no Brasil, explorando descidas comerciais nos estados de São Paulo, Rio de Janeiro, Rio Grande do Sul, Santa Catarina, Minas Gerais, Paraná, Bahia, Mato Grosso do Sul e Tocantins.
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