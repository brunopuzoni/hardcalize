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
      <li class="active"><a href="cadastra.php">Cadastrar dados</a></li>
      <li><a href="controle.php">Alterar/Excluir dados</a></li>
      <li><a href="pesquisar.php">Pesquisar dados</a></li>
      <li><a href="relato.php">Feedback's</a></li>
      <li><a href="logout.php"> Logout </a></li>

      
        </ul>
      </li>
    </ul>
    
     
  </div>
</div>
</div>

<form class="form-horizontal" action="inserir.php" method="post">
  <fieldset>
    <legend>Formulário de Cadastro de usuários</legend>
        <div class="form-group">
      <label for="login" class="col-lg-2 control-label">Login</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="login_us" placeholder="Digite seu nome de usuário" name="login_us">
      </div>
    </div>
      
      <div class="form-group">
      <label for="senha" class="col-lg-2 control-label">Senha</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="senha_us" placeholder="Digite sua senha" name="senha_us">
      </div>
    </div>
      
      <div class="form-group">
      <label for="nome" class="col-lg-2 control-label">Nome</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="nome_us" placeholder="Digite seu nome completo" name="nome_us">
      </div>
    </div>
    
    <div class="form-group">
      <label for="email" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="mail" class="form-control" id="email_us" placeholder="Digite seu email" name="email_us">
      </div>
    </div>
    
    <div class="form-group">
      <label for="cidade" class="col-lg-2 control-label">Cidade</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="cidade_us" placeholder="Digite a cidade de sua residência" name="cidade_us">
      </div>
    </div>
    
    <div class="form-group">
      <label for="estado" class="col-lg-2 control-label">Estado</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="estado_us" placeholder="Digite o estado de seu residência" name="estado_us">
      </div>
    </div>
    
    <div class="form-group">
      <label for="telefone" class="col-lg-2 control-label">Telefone</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="telefone_us" placeholder="(xx) 00000-0000" name="telefone_us">
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </div>
  </fieldset>
</form>


</body>
</html>
