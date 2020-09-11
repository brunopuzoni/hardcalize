<?php
   include('config.php');
   session_start();
   
   $checa_usuario = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"SELECT login_us FROM usuario where login_us = '$checa_usuario' ");
   $ses_sql2= mysqli_query($db,"SELECT id_us FROM usuario where login_us = '$checa_usuario' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $row2 = mysqli_fetch_array($ses_sql2,MYSQLI_ASSOC);
   
   $login_session = $row['login_us'];
   $id_session = $row2['id_us'];
   
   if (!isset($_SESSION['login_user'])){
			echo ("<script type='text/javascript'>
			window.alert('Você precisa estar logado para acessar essa página!')
			window.location.href='login.php';
			</script>");
			
		}
?>