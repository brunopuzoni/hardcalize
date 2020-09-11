<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Login do Usuário - Hardcalize</title>
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
         <div id="head">
            <div class="line">
            </div>
         </div>
          <div id="content">
            <div class="line">
               <div class="margin">
               <h2> Login </h2>
               <br>
               
<?php
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // usuario e senha enviados do formulario 
      
      $myusername = mysqli_real_escape_string($db,$_POST['login_us']);
      $mypassword = mysqli_real_escape_string($db,$_POST['senha_us']);
	  
      
	
      $sql = "SELECT id_us FROM usuario WHERE login_us = '$myusername' and senha_us = '$mypassword'";
	  $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	      		   
	  //$active = $row['ativo'];
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1)
	  {
        //session_register("myusername");
			
         	$_SESSION['login_user'] = $myusername;
		    $_SESSION['id_us'] = $row['id_us'];
			echo("<script>location.href = 'index.php';</script>");        	
		
      }
	  else {
		  $erro = "Login e/ou Senha incorreto(s).\\nTente novamente.";
          echo "<script type='text/javascript'>alert('$erro');</script>";	 
      }
	  
   }
      if (!empty($_SESSION['confirmaLogin'])){
			echo ("<script type='text/javascript'>
			window.alert('Você já está logado!')
			window.location.href='index.php';
			</script>");
			
		}
?>             
               <form method="POST" action="" class="customform">
               <p class="s-8 m-4 l-3 center"><input type="text" placeholder="Login" id="login" name="login_us">
               </p>
               <p class="s-8 m-4 l-3 center"><input type="password" placeholder="Senha" id="senha" name="senha_us">
               </p>
               <p class="s-8 m-4 l-2 center"><button type="submit" name="btn_login">Entrar</button></p>
               </form>
               <br>
               <p class="s-12 m-12 l-6 center">Clique <b><a href="cadastro_usuario.php">AQUI</a></b> para se cadastrar como usuário e <b><a href="cadastro_empresa.php">AQUI</a></b> para se cadastrar como empresa.
               </p>
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