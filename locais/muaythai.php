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
	    include("../crud/session_user.php");
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
                        	<li><a href="../esportes/skate.php">Skate</a></li>
							<li><a href="../esportes/escalada.php">Escalada</a></li>
							<li><a href="../esportes/bungeejump.php">Bungee Jump</a></li>
							<li><a href="../esportes/rafting.php">Rafting</a></li>
							<li><a href="../esportes/paraquedismo.php">Paraquedismo</a></li>
							<li><a href="../esportes/surfing.php">Surfing</a></li>
                            <li><a href="../esportes/rapel.php">Rapel</a></li>
                            <li><a href="../esportes/muaythai.php">Muay Thai</a></li>
                            <li><a href="../esportes/mma.php">MMA</a></li>
                            <li><a href="../esportes/motocross.php">Motocross</a></li>
                            <li><a href="../esportes/balonismo.php">Balonismo</a></li>
                            <li><a href="../esportes/parkour.php">Parkour</a></li>
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
               <a class="button s-12 l-2 center" href="../esportes/muaythai.php">Descrição do Esporte</a>
            </div>
         </div>
          <div id="content">
            <div class="line">
               <div class="margin">
              <?php
			  $resultado = mysqli_query($db,"SELECT nome_lugar,cidade_lugar,estado_lugar,site_lugar,id_lugar,imagem FROM lugar WHERE id_esporte=12");
			  mysqli_close($db);
			  
			  while($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
				$nome = $linha["nome_lugar"];
				$cidade = $linha["cidade_lugar"];
				$estado = $linha["estado_lugar"];
				$site = $linha["site_lugar"];
				$id = $linha["id_lugar"];
				$imagem = $linha["imagem"];
              
				echo utf8_encode("<h2>$nome</h2> <br>");
				echo utf8_encode("<b>Cidade:</b> $cidade - $estado .");
				echo "<br> <br>";
				if (!empty($imagem)){
				echo "<img src='../img/locais/".$imagem."' class='s-12 l-5 center'>";
				}
				else {
				echo "<img src='../img/locais/noimage.jpg' class='s-12 l-5 center'>";	
				}
				?>
			
			<br><br><br>
            </div>
            <div class="center">
				<?php
				echo "<table>";
				echo "<tr>";
				echo "<td> <a class=\"button s-6 l-6 center\" target=\"_blank\" href=\"$site\"> Site do Local </a> </th>";
				echo "<td> <a class=\"button s-6 l-6 center\" href=\"../comentario.php?id_lugar=$id\"> Comentários </a> </th>";
				echo "</tr>";
				echo "</table>";
				echo "<br>";
				echo "<hr>";
			  }
             ?>
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