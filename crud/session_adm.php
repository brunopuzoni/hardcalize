<?php
   include('config.php');
   
   $checa_usuario = $_SESSION['login_adm'];
   
   $ses_sql = mysqli_query($db,"SELECT login_adm FROM administrador where login_adm = '$checa_usuario' ");
   $ses_sql2= mysqli_query($db,"SELECT id_adm FROM administrador where login_adm = '$checa_usuario' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $row2 = mysqli_fetch_array($ses_sql2,MYSQLI_ASSOC);
   
   $login_session = $row['login_adm'];
   $id_session = $row2['id_adm'];
   
   if(!isset($_SESSION['login_adm'])){
      header("location:login.php");
   }
?>