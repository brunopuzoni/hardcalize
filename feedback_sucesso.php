<!DOCTYPE html>
<html>
<body>
 <?php
include("crud/session_user.php");
$db = mysqli_connect('localhost', 'root','', 'u773490287_hardc');
session_start();
$resultado = mysqli_query($db, "INSERT INTO feedback (id_us,mensagem) VALUES ('$_SESSION[id_us]', '$_REQUEST[mensagem]')");
mysqli_close($db);
header("location:index.php");
?>

</body>
</html>