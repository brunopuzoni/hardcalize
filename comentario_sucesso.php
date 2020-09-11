<!DOCTYPE html>
<html>
<body>
 <?php
include("crud/session_user.php");
$db = mysqli_connect('localhost', 'root','', 'u773490287_hardc');
session_start();
$resultado = mysqli_query($db, "INSERT INTO comentario (id_us,texto,id_lugar) VALUES ('$_SESSION[id_us]', '$_REQUEST[comentario]', '$_SESSION[id_lugar]')");
mysqli_close($db);

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>

</body>
</html>