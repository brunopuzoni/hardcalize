<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Cadastro do Usuário - Hardcalize</title>
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
	    if (!empty($_SESSION['login_user'])){
			echo ("<script type='text/javascript'>
			window.alert('Você já está logado!')
			window.location.href='index.php';
			</script>");
			
		}
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
               <h2> Cadastro do Usuário</h2>
               <br>
               <form method="POST" action="cadastro_usuario_sucesso.php" class="customform">
               <table>
               <tr>
               <th>
               <p class="s-8 m-4 l-6 center"><b><label for="login_us">Usuário</label></b> <input type="text" placeholder="Digite seu nome de usuário" id="login_us" name="login_us">
               </p>
               </th>
               <th>
               <p class="s-8 m-4 l-6 center"><b><label for="senha_us">Senha</label></b> <input type="password" placeholder="Digite sua senha" id="senha_us" name="senha_us">
               </p>
               </th>
               </tr>
               <tr>
               <th>
               <p class="s-8 m-4 l-6 center"><b><label for="nome_us">Nome Completo</label></b> <input type="text" placeholder="Digite seu nome completo" id="nome_us" name="nome_us">
               </p>
               </th>
               <th>
               <p class="s-8 m-4 l-6 center"><b><label for="email_us">Email</label></b> <input type="email" placeholder="email@provedor" id="email_us" name="email_us">
               </p>
               </th>
               </tr>
               <tr>
               <th>
               <p class="s-8 m-4 l-6 center"><b><label for="cidade_us">Cidade</label></b> <input type="text" placeholder="Digite a cidade de residência" id="cidade_us" name="cidade_us">
               </p>
               </th>
               <th>
               <p class="s-8 m-4 l-6 center"><b><label for="estado_us">Estado</label></b> <input type="text" placeholder="Digite o estado de residência" id="estado_us" name="estado_us">
               </p>
               </th>
               </tr>
               </table>
               <p class="s-8 m-4 l-3 center"><b><label for="telefone_us">Telefone</label></b> <input type="tel" placeholder="(xx) xxxx-xxxx" id="telefone_us" name="telefone_us">
               </p>
               <p class="s-8 m-4 l-2 center"><button type="submit">Enviar</button></p>
               </form>
               <br>
               <p class="s-12 m-12 l-6 center">Já realizou o cadastro? Clique <b><a href="login.php">AQUI</a></b> para efetuar o login.
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