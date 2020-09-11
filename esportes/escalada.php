<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Escalada - Hardcalize</title>
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
               <h1>Escalada</h1>
               <a class="button s-12 l-2 center" href="../locais/escalada.php">Onde Praticar</a>  
            </div>
         </div>
          <div id="content">
<center><img src="../img/escalada_con.jpg"></center><br><br>
            <div class="line">
               <div class="margin">
               <p class="s-12 m-12 l-8 center">O Montanhismo nasceu como desporto no último quartel de século XVIII, sob a denominação de "Alpinismo", por ter começado na famosa cordilheira dos Alpes, em plena Europa Central. Foi portanto seu marco inicial a escalada ao 'Mont Blanc', no ano de 1786, considerada como o início da prática do chamado "Nobre Esporte das Alturas".
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">No século XIX, registaram-se várias subidas de montanhas, começando então a sua caracterização desportiva, embora ainda incipiente e com motivações várias.
               </p>
               <p class="s-12 m-12 l-8 center">No início do século XX houve grande avanço técnico no Montanhismo, em particular na escalada em rocha e gelo. As principais vertentes dos Alpes foram escaladas e em 1938 a face norte do Eiger, uma das maiores paredes da Europa, é conquistada.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">As décadas de 40 e 50 foram um período de grandes escaladas e grandes escaladores. Foi escalado o primeiro pico com mais de 8.000 metros de altitude, o Annapurna com 8.078 metros em 1950. O ´Teto do Mundo´ foi atingido, o Everest (8.848 metros) em 1953, pelo neozelandês Edmund Hillary e o sherpa Tensing Norkay. No ano seguinte o K-2, segunda montanha mais alta do mundo. Na Europa Walter Bonatti escala em solitário e no inverno a face norte do Cervino.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">No campo da escalada em rocha foram escalados o Half Dome (1957) e o El Capitan (1958), na Califórnia, com 800 e 1.000 metros de pura rocha vertical, respectivamente. Sem esquecer do Fitz-Roy na Patagônia argentina, escalado em 1952, por Lionel Terray e Guido Magnone. No Brasil foram escalados o Pico Maior de Friburgo, a Chaminé Rio de Janeiro na imponente face sul do Corcovado e a Chaminé Gallotti no Pão de Açúcar entre várias outras montanhas de igual beleza. Um dos escaladores que mais se destacou nesta época foi Sílvio Mendes.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Finalmente, a partir da década de 60, consolidou-se o Montanhismo desportivo moderno. Com novas técnicas desenvolvidas, equipamentos avançados, treinos rigorosos e escaladas cada vez mais atléticas, grandes paredes foram vencidas, entre elas: a Torre Central del Paine (1963) e o Cerro Torre (1974), ambas na Patagônia. São escaladas vertentes cada vez mais difíceis em picos antes já atingidos. Reinhold Messner atinge o cume do Everest sem utilizar oxigênio engarrafado em 1978 e dois anos depois repete o feito, e desta vez, em solitário.
               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Na década de 80 e 90 a escalada desportiva cresce no mundo todo e dificuldades extremas são superadas. Paredes gigantescas que eram antes escaladas em artificial são repetidas em livre. No Paquistão a Grande Trango Tower, talvez a maior parede de rocha do mundo, é escalada.
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