<!-- iniciamos la conexion -->
<?php
  try {
  $conexion = new PDO('mysql:host=localhost;dbname=academico','vladimir','123456');
  } catch (PDOExeption $prueba_error) {
  echo "Error: " . $prueba_error->getMessage();
  }
  ?>
