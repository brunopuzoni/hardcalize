<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="../img/icon/favicon.ico">
    <title>Área do Administrador</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
   <body>
   	<div class="invisible">
	<?php
		session_start();
		include_once('session_adm.php');
   ?>
   </div>
   
<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Administrador</a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Mostrar dados</a></li>
      <li><a href="cadastra.php">Cadastrar dados</a></li>
      <li><a href="controle.php">Alterar/Excluir dados</a></li>
      <li class="active"><a href="pesquisar.php">Pesquisar dados</a></li>
      <li><a href="relato.php">Feedback's</a></li>
      <li><a href="logout.php"> Logout </a></li>
      
        </ul>
      </li>
    </ul>
    
     
  </div>
</div>
<?php

$conexao = mysql_connect('localhost','root','');
$db = mysql_select_db('u773490287_hardc') or die ("Erro de BD...");


$resultado = mysql_query("SELECT * FROM usuario WHERE  id_us='$_REQUEST[id_us]'");



mysql_close($conexao);

while ($linha = mysql_fetch_array($resultado)){
	$id = $linha["id_us"];
	$login = $linha["login_us"];
	$nome = $linha["nome_us"];
	$email = $linha["email_us"];
	$cidade = $linha["cidade_us"];
	$estado = $linha["estado_us"];
	$telefone = $linha["telefone_us"];
	?>
    <h1 class="text-center"> Dados do Usuário </h1>
    <br><br>
	<p class="text-center">
    <?php
	echo "<font face='Verdana, Geneva, sans-serif'>";
	echo "Código de usuário: $id <br>";
	echo "Nome de usuário: $login <br>";
	echo "Nome completo: $nome <br>";
	echo "Email: $email <br>";
	echo "Cidade: $cidade <br>";
	echo "Estado: $estado <br>";
	echo "Telefone: $telefone <br></p>";
		
	}
?>
</p>

</body>
</html>