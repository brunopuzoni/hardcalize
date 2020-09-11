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
<div class="alert alert-dismissable alert-info">
  
  <h4>Pesquisa de usuários</h4>
  <p>Pesquise por um usuário digitando o Código do Usuário</p>
</div>


<form class="form-horizontal" action="pesquisar2.php" method="post">
  <fieldset>
    <legend>Pesquisa de usuários</legend>
        
    <div class="form-group">
      <label for="nome" class="col-lg-2 control-label">Código do Usuário</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="id_us" placeholder="Digite o código do usuário" name="id_us">
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
        <button type="submit" class="btn btn-primary">Pesquisar</button>
      </div>
    </div>
  </fieldset>
</form>


</body>
</html>
