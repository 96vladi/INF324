<!-- verificamos si el usuario es el correcto -->
<?php
  if (isset($_SESSION['usuario'])) {
    header('location: vista.php');
  }else {
    header('location: loginVista.php');
  }
 ?>
