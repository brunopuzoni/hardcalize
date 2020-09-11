<?php
   include('config.php');
   session_start();
   
   $checa_empresa = $_SESSION['login_empresa'];
   
   $ses_sql = mysqli_query($db,"SELECT login_empresa FROM empresa where login_empresa = '$checa_empresa' ");
   $ses_sql2= mysqli_query($db,"SELECT id_empresa FROM empresa where id_empresa = '$checa_empresa' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $row2 = mysqli_fetch_array($ses_sql2,MYSQLI_ASSOC);
   
   $login_session = $row['login_empresa'];
   $id_session = $row2['id_empresa'];
   
   if(!isset($_SESSION['login_empresa'])){
      header("location:login_empresa.php");
   }
?>