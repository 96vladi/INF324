<?php session_start();
  // mandamos a hace la verificacion del usuario
  if (isset($_SESSION['usuario'])) {
    header('location: index.php');
  }
  $error = '';
  // verificamos el metodo y le damos los valores correspondientes
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    try {
      $conn = new PDO('mysql:host=localhost;dbname=academico','vladimir','123456');
    } catch (PDOExeption $prueba_error) {
      echo "Error: " . $prueba_error->getMessage();
    }
    // realizamos la consulta
    $statement = $conn->prepare('
    SELECT * FROM usuario WHERE Ci = :usuario AND Clave = :clave'
    );
    //Ejecutamos la sentencia
    $statement->execute(array(
      ':usuario' => $usuario,
      ':clave' => $clave
    ));
    // obtenemos las las filas de los resultados
    $resultado = $statement->fetch();
    //realizamos la verificacion
    if ($resultado !== false) {
      $_SESSION['usuario'] = $usuario;
      header('location: vista.php');
    }else {
      $error .= '<i>Este usuario no existe</i>';
    }
  }
  require 'loginVista.php'
 ?>
