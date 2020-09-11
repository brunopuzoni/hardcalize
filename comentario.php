<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Comentários - Hardcalize</title>
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

   
   <div class="invi">
   	<?php
		require_once("crud/config.php");
		session_start();
	    include("crud/session_user.php");
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
      
      <?php
	   $id_lugar = $_GET['id_lugar'];
	   $resultado2 = mysqli_query($db, "SELECT nome_lugar from lugar WHERE id_lugar = $id_lugar");
	   $linha2 = mysqli_fetch_array($resultado2, MYSQL_ASSOC);
	   $nome_lugar = $linha2['nome_lugar'];
	   
	   ?>
      <section>
         <div id="head">
            <div class="line">
               <h1><?php echo "Comentários";?></h1>
			   <h1><?php echo $nome_lugar;?></h1>
            </div>
         </div>
          <div id="content-coment">
            <div class="line">
               <div id="margin">
               
              <?php
			  $_SESSION['id_lugar'] = $_GET['id_lugar'];
			  
			  $resultado = mysqli_query($db,"SELECT comentario.texto, usuario.login_us FROM comentario INNER JOIN usuario ON comentario.id_us=usuario.id_us WHERE comentario.id_lugar=$id_lugar");
			  mysqli_close($db); ?>
			  
			  <h2>Faça um comentário sobre este local</h2>
			  <form class="customform" method="post" name="form" action="comentario_sucesso.php">
			  <div class="s-12">
			  		<div class="m-6 l-5 center"><textarea name="comentario" rows="7" cols="50" required autofocus class="customform"></textarea></div>
			  		<div class="m-6 l-3 center"><button type="submit"> Enviar </button></div>
			  		
			  </form>
			  </div>
				</div>
			  	</div>
		  		</div>
		  	  <div id="coment">
		  	  	<div class="line">
		  	  		<div class="margin">
			 
			  		<h2>Comentários já feitos</h2>
			  	   
			  <?php	  
						
			   $contador = mysqli_num_rows($resultado);
						
			   if($contador	> 0) {
				   
			   while($linha = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
				  
			  
				$comentario = $linha["texto"];
				$usuario = $linha["login_us"];
                
				echo "<br>";  
				echo "<b>" . $usuario . "</b>";
				echo "<br>";
				echo $comentario;
				echo "<br>";
				echo "<br>";
				echo "<hr>";
			  }
			   }
			  else {
				  
				  echo "<br>";
				  echo "Este local ainda não possui nenhum comentário. Seja o primeiro!";
				  
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
      <script type="text/javascript" src="owl-carousel/owl.carousel.js">
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