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
   
   <script type="text/javascript">
   function EasterEgg(){
   window.alert("Esse site só tem desenvolvedor bonito e o Pezão,\nsó que ele não é desenvolvedor então não conta.");
   }
   </script>
   
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
      <li><a href="pesquisar.php">Pesquisar dados</a></li>
      <li><a href="relato.php">Feedback's</a></li>
      <li><a href="logout.php"> Logout </a></li>

      
        </ul>
      </li>
    </ul>
   
    
  </div>
</div>    
    
<?php
   
   include('config.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // usuario e senha enviados do formulario 
      
      $myusername = mysqli_real_escape_string($db,$_POST['login_adm']);
      $mypassword = mysqli_real_escape_string($db,$_POST['senha_adm']);
	  
      
	
      $sql = "SELECT id_adm FROM administrador WHERE login_adm = '$myusername' and senha_adm = '$mypassword'";
	  $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	      		   
	  //$active = $row['ativo'];
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1)
	  {
        //session_register("myusername");
			
         	$_SESSION['login_adm'] = $myusername;
		    $_SESSION['id_adm'] = $row['id_adm'];
			echo("<script>location.href = 'index.php';</script>");        	
		
      }
	  else {
		  $erro = "Login e/ou Senha incorreto(s).\\nTente novamente.";
          echo "<script type='text/javascript'>alert('$erro');</script>";	 
      }
	  
   }
?>


<section id="ajudante">
    <div class="col-lg-8 col-lg-offset-2 container-fluid">
                <center><h1>Login</h1></center>
                      <a onClick="EasterEgg()"> <hr> </a>
					<br>
                    <form method="POST"  action="">
                      <div class="row control-group">
                            <div class="form-group col-xs-4 col-lg-offset-4 floating-label-form-group controls">
                             
                                <label>Usuário</label>
                                <input type="text" class="form-control" placeholder="Login" id="Login" name="login_adm">
                                <p class="help-block text-danger"></p><br>
                              
                             
                              <label>Senha</label>
                              <input type="password" class="form-control " placeholder="Senha" id="Senha" name="senha_adm">
                             
                            </div>
                            
                            <div class="control-group"></div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-lg-offset-5">
							  <br><br><br><br><br><br><br><br>
                              <input type="submit" class="btn btn-primary btn-xl" value="ENTRAR" name="entrar">
                             
                            </div>
                        </div>
                    </form>
                    
 </header>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
