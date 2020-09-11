<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Finalização da Inserção do Local - Hardcalize</title>
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
		require_once("crud/session_empresa.php");
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
               	
               		
<?php

$conexao = mysql_connect('localhost','root','') or die ("Erro de Conexão...");
$db = mysql_select_db('u773490287_hardc') or die ("Erro de BD...");

$imagem = $_FILES["imagem"];

	// Se a imagem estiver sido selecionada
	if (!empty($imagem["name"])) {
		
		// Largura máxima em pixels
		$largura = 450;
		// Altura máxima em pixels
		$altura = 200;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1500000;
 
		$error = array();
 
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($imagem["tmp_name"]);
	
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($imagem["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
 
		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
 
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "img/locais/" . $nome_imagem;
 
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);

			$resultado = mysql_query("INSERT INTO lugar (nome_lugar, cidade_lugar, estado_lugar, site_lugar, imagem, id_empresa, id_esporte) VALUES ('$_REQUEST[nome_lugar]', '$_REQUEST[cidade_lugar]', '$_REQUEST[estado_lugar]', '$_REQUEST[site_lugar]', '".$nome_imagem."', '$_SESSION[login_empresa]', '$_REQUEST[esportes]')") or die("Erro ao inserir o local");


			
			if ($resultado){
				echo "Lugar inserido com sucesso";
			}
		}
		
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br>";
			}
		}
	}
				   
			mysql_close($conexao);

?>

    <br>
<div class="row">
	<div class="col-md-12">
		<a class="button s-12 l-3 center" href="index.php">Voltar à tela inicial
        </a>
	  </div>
	</div>
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
    
</body>
</html>