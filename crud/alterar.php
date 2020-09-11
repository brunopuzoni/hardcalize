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
      <li><a href="index.php">Exibir dados</a></li>
      <li><a href="cadastra.php">Cadastrar dados</a></li>
      <li class="active"><a href="controle.php"><b>Alterar</b></a></li>
      <li><a href="pesquisar.php">Pesquisar dados</a></li>
      <li><a href="relato.php">Feedback's</a></li>
      <li><a href="logout.php"> Logout </a></li>

      
        </ul>
      </li>
    </ul>

    
  </div>
</div>

<div class="alert alert-dismissable alert-info">
  
  <h4>Dados dos usuários</h4>
  <p>Preencha os dados que deseja alterar do usuário selecionado.</p>
</div>
<?php
$conexao = mysql_connect('localhost','root','');
$db = mysql_select_db('u773490287_hardc');
$resultado = mysql_query("SELECT * FROM usuario WHERE id_us='$_REQUEST[id_us]'");
mysql_close($conexao);

while ($linha = mysql_fetch_array($resultado)){
	$id = $linha["id_us"];
	$login = $linha["login_us"];
	$senha = $linha["senha_us"];
	$nome = $linha["nome_us"];
	$email = $linha["email_us"];
	$cidade = $linha["cidade_us"];
	$estado = $linha["estado_us"];
	$telefone = $linha["telefone_us"];
	
echo "<fieldset>";
echo "<legend>Alteração do Cadastro de Usuários</legend>";
echo "<div class='form-group'>";
echo "<form class='form-horizontal' action='alterar_db.php? id_us= $id' method='post'>";


echo "<div class='form-group'>";
echo "      <label for='id_us' class='col-lg-2 control-label'>Código do usuário:</label>";
echo "      <div class='col-lg-10'>";
echo "        <input type='text' class='form-control' value='$id' id='id_us' placeholder='id_us' name='id_us_novo'>";
echo "      </div>";
echo "    </div>";


echo "<div class='form-group'>";
echo "      <label for='login_us' class='col-lg-2 control-label'>Login:</label>";
echo "      <div class='col-lg-10'>";
echo "        <input type='text' class='form-control' value='$login' id='login_us' placeholder='Nome de usuário' name='login_us_novo'>";
echo "      </div>";
echo "    </div>";


echo "<div class='form-group'>";
echo "      <label for='senha_us' class='col-lg-2 control-label'>Senha:</label>";
echo "      <div class='col-lg-10'>";
echo "        <input type='text' class='form-control' value='$senha' id='senha_us' placeholder='Senha' name='senha_us_novo'>";
echo "      </div>";
echo "    </div>";

echo "<div class='form-group'>";
echo "      <label for='nome' class='col-lg-2 control-label'>Nome completo:</label>";
echo "      <div class='col-lg-10'>";
echo "        <input type='text' class='form-control' value='$nome' id='nome_us' placeholder='Nome completo' name='nome_us_novo'>";
echo "      </div>";
echo "    </div>";


echo "<div class='form-group'>";
echo "      <label for='emai' class='col-lg-2 control-label'>Email:</label>";
echo "      <div class='col-lg-10'>";
echo "        <input type='text' class='form-control' value='$email' id='email_us' placeholder='email' name='email_us_novo'>";
echo "      </div>";
echo "    </div>";


echo "<div class='form-group'>";
echo "      <label for='cidade' class='col-lg-2 control-label'>Cidade:</label>";
echo "      <div class='col-lg-10'>";
echo "        <input type='text' class='form-control' value='$cidade' id='cidade_us' placeholder='Cidade' name='cidade_us_novo'>";
echo "      </div>";
echo "    </div>";


echo "<div class='form-group'>";
echo "      <label for='estado' class='col-lg-2 control-label'>Estado:</label>";
echo "      <div class='col-lg-10'>";
echo "        <input type='text' class='form-control' value='$estado' id='estado_us' placeholder='Estado' name='estado_us_novo'>";
echo "      </div>";
echo "    </div>";


echo "<div class='form-group'>";
echo "      <label for='telefone' class='col-lg-2 control-label'>Telefone:</label>";
echo "      <div class='col-lg-10'>";
echo "        <input type='text' class='form-control' value='$telefone' id='telefone_us' placeholder='(xx) 00000-0000' name='telefone_us_novo'>";
echo "      </div>";
echo "    </div>";


echo "<div class='form-group'>";
echo "      <div class='col-lg-10 col-lg-offset-2'>";
echo "        <button type='submit' class='btn btn-primary'>Alterar</button>";	
echo "        <a href='controle.php' class='btn btn-default'>Cancelar</button>";
echo "      </div>";
echo "    </div>";


//echo "Código do usuário: <input name='id_us_novo' value='$id' maxlength=10><br>";
//echo "Nome de usuário: <input login='login_us_novo' value='$login' maxlength=30><br>";
//echo "<input type='submit' value='ALTERAR'>";

echo "</fieldset>";

echo "</form>";
echo "<br><hr>";
}



?>

</body>
</html>