<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Muay Thai - Hardcalize</title>
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
               <h1>Muay Thai</h1>
               <a class="button s-12 l-2 center" href="../locais/muaythai.php">Onde Praticar</a>  
            </div>
         </div>
          <div id="content">
            <div class="line">
				<center><img src="../img/muaythai.jpg" align"center"></center><br><br>

               <div class="margin">
               <p class="s-12 m-12 l-8 center">O Muay Thai, o qual também é conhecido como Thai Boxing em alguns países como Estados Unidos e Inglaterra, é muito conhecido no Brasil como Boxe Tailandês e é uma Arte Marcial Tailandêsa com mais de 2.000 anos de idade. A origem do Muay Thai confunde-se com a origem do povo Tailandês. Existem várias versões sobre a origem do Muay Thai. A mais aceita pela maioria dos Mestres de Muay Thai e também por vários historiadores Tailandeses é a seguinte:

               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Segundo os Tailandeses, a origem de seu povo é a província de Yunnam, nas margens do rio Yang Tsé na China Central. Muitas gerações atrás eles migraram da China para o local onde atualmente é à Tailândia em busca de liberdade e de terras férteis para agricultura.

               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Do seu local de origem, a China, até o seu destino, os Tailandeses foram constantemente hostilizados e sofreram muitos ataques de bandidos, de Senhores da Guerra, de animais, e também foram acometidos de muitas doenças. Para protegerem-se e manterem à saúde, eles criaram um método de luta chamado "Chupasart". Este método de luta e auto-defesa fazia uso de diversas armas como por exemplo: espadas, facas, lanças, bastões, escudos, machados, arco e flecha, etc.

               </p>
               <br>
               <p class="s-12 m-12 l-8 center">No treinamento do "Chupasart", frequentemente ocorriam acidentes que causavam algumas vezes graves ferimentos aos praticantes. Para que eles pudessem treinar sem ferir-se, os tailandeses criaram um método de luta sem armas, o percursor do atual Muay Thai. Assim eles podiam exercitar-se e treinar mesmo em tempos de paz e sem o risco de ferir-se.

               </p>
               <br>
               <p class="s-12 m-12 l-8 center">No início, o Muay Thai era muito parecido com o Kung Fu Chinês. Um fato normal levando-se em conta à origem do povo Tailandês. O antigo Muay Thai utilizava-se de golpes com as palmas das mãos, ataques com as pontas dos dedos, imobilizações e mãos em garras para segurar o oponente. Com o tempo, ele foi modificando-se e transformou-se no estilo de luta que é hoje.

               </p>
               <br>
               <p class="s-12 m-12 l-8 center">Em muitos períodos da história tailandêsa o Muay Thai foi muito popular entre os tailandeses. Principalmente no perído do Rei Pra Chao Sua ou "Rei Tigre" como era mais conhecido. Ele foi um dos maiores lutadores de Muay Thai da história. Durante o seu reinado o Muay Thai fazia parte da preparação militar e era ensinado em todas as escolas.               
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