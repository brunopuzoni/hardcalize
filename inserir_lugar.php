<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Inserção de local - Hardcalize</title>
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
	    include("crud/session_empresa.php");
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
            <h1>Inserção de lugar</h1>
            </div>
         </div>
          <div id="content">
            <div class="line">
               <div class="margin">
<form method="POST" action="inserir_lugar_sucesso.php" class="customform" enctype="multipart/form-data">
               <table>
               <tr>
               <th>
               <p class="s-8 m-4 l-6 center"><b><label for="nome_lugar">Nome do Local</label></b> <input type="text" placeholder="Digite o nome do local" id="nome_lugar" name="nome_lugar">
               </p>
               </th>
               <th>
               <p class="s-8 m-4 l-6 center"><b><label for="site_lugar">Site</label></b> <input type="text" placeholder="http://www.exemplo.com/" id="site_lugar" name="site_lugar">
               </p>
               </th>
               </tr>
               <tr>
               <th>
               <p class="s-8 m-4 l-6 center"><b><label for="cidade_lugar">Cidade</label></b> <input type="text" placeholder="Digite a cidade do local" id="cidade_lugar" name="cidade_lugar">
               </p>
               </th>
               <th>
               <p class="s-8 m-4 l-6 center"><b><label for="estado_lugar">Estado</label></b> <input type="text" placeholder="Digite o estado do local" id="estado_lugar" name="estado_lugar">
               </p>
               </th>
               </tr>
               </table>
               <br>
               <p class="s-8 m-4 l-3 center"><b><label for="esporte">Esporte</label></b>
               <select name="esportes">
               		<option value="null" selected>-- Indique o Esporte --</option>
               		<option value="1">Skating</option>
                    <option value="2">Escalada</option>
                    <option value="3">Bungee Jump</option>
                    <option value="4">Rafting</option>
                    <option value="5">Paraquedismo</option>
                    <option value="6">Surfing</option>
                    <option value="7">Balonismo</option>
                    <option value="8">Motocross</option>
                    <option value="9">Rapel</option>
                    <option value="10">Parkour</option>
                    <option value="11">MMA</option>
                    <option value="12">Muay Thai</option>
               </select>
               </p>
               <br>
			   <p class="s-8 m-4 l-3 center"><b><label>Imagem</label></b>
               <input type="file" name="imagem" id="imagem">
               </p>
               <br>
               <p class="s-8 m-4 l-2 center"><button type="submit">Enviar</button></p>
               </form>
                              
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