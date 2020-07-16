<?php session_start();
  $color = $_POST['paleta'];
  $ci = $_POST['codigo'];
  $conn = new PDO('mysql:host=localhost;dbname=academico','vladimir','123456');
  $consulta = $conn->prepare("UPDATE usuario SET color = '$color' WHERE Ci='$ci'");
  $consulta->bindParam(":color",$color);
  $consulta->execute();
  if ($consulta->execute()){
    header('location: vista.php');
  }else {
    echo "ocurrio un error";
  }
 ?>
