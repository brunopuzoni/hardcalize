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
    <a class="navbar-brand" href="index.php"> Administrador </a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Mostrar dados</a></li>
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

<div class="alert alert-dismissable alert-info">
  
  <h4>Dados da tabela de usuários</h4>
  <p>Detalhes de um usuário.</p>
</div>

<?php
$conexao = mysql_connect('localhost','root','');
$db = mysql_select_db('u773490287_hardc');
$resultado = mysql_query("SELECT * FROM usuario WHERE id_us='$_REQUEST[id_us]'");
mysql_close($conexao);


echo "<table class=\"table table-striped table-hover \" align='center' width=150 border=1 cellpadding=1 cellspacing=1>";
echo "<tr>";
echo "<th class=\"coluna\" width=50>Código de usuário</th>";
echo "<th class=\"coluna\" width=100>Nome de usuário</th>";
echo "<th class=\"coluna\" width=50>Nome completo</th>";
echo "<th class=\"coluna\" width=50>Email</th>";
echo "<th class=\"coluna\" width=50>Cidade</th>";
echo "<th class=\"coluna\" width=50>Estado</th>";
echo "<th class=\"coluna\" width=50>Telefone</th>";

echo "</tr>";

while ($linha = mysql_fetch_array($resultado)){
	$id = $linha["id_us"];
	$login = $linha["login_us"];
	$nome = $linha["nome_us"];
	$email = $linha["email_us"];
	$cidade = $linha["cidade_us"];
	$estado = $linha["estado_us"];
	$telefone = $linha["telefone_us"];
	
echo "<tr class=\"info\">";
echo "<th width=50>$id<br></th>";
echo "<th width=100>$login<br></th>";
echo "<th width=50>$nome<br></th>";
echo "<th width=50>$email<br></th>";
echo "<th width=50>$cidade<br></th>";
echo "<th width=50>$estado<br></th>";
echo "<th width=50>$telefone<br></th>";
echo "</tr>";

}
echo "</table>";

?>


</body>
</html>