<?php
  include("conexion.php");
  session_start();
  // obtenemos el usuario
  $ci = $_SESSION['usuario'];
  // realizamos la consulta
  $sql = "SELECT Nombre,ApellidoP,ApellidoM,color,img
        FROM identificador,usuario
        WHERE identificador.Ci = '$ci' AND usuario.Ci = '$ci'";
  $resultado = $conexion->query($sql);
  $row = $resultado->fetch();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Miestilo.css">
    <style>
      header{
        color: white;
        margin: auto;
        padding: 10px;
        text-align: center;
        display: flex;
        font-size: 20px;
        width: 100%;
        height: 100px;
        background:rgba(0,0,0,0.6);
        border:2px solid white;
        border-radius:0px 0px 0px 0px;
      }
      header h1{
        font-size: 50px;
        color: white;
        font-weight: 100;
        margin-top: 10px;
        margin-left: 340px;
      }
      .contenido h1{
        font-size: 50px;
        color: <?php echo utf8_decode($row['color']);?>;
        font-weight: 100;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <header>
      <br>
      <div class="foto">
        <img src="<?php echo utf8_decode($row['img']);?>" width="70" height="80">
      </div>
      <h1>OKIA PROGRAMMING</h1>
    </header>
    <div class="contenido">
      <img src="img/Aiko.png">
      <!-- damos la Bienvenida al usuario con codigo php para mostar los nombres -->
      <h1>Bienvenido, <?php echo utf8_decode($row['Nombre']);?>
        <?php echo utf8_decode($row['ApellidoP']);?>
        <?php echo utf8_decode($row['ApellidoM']);?>
      </h1>
      <a href="cerrar.php">Cerrar sesion</a>
    </div>
    <!-- <div class="paleta"> -->
      <form class="paleta" action="modifica.php" method="post">
        Elija el color de la letra:
        <input type="hidden" name="codigo" value=<?php echo $ci;?>>
        <select class="paleta" name="paleta">
          <option value="white">white</option>
          <option value="red">red</option>
          <option value="orange">orange</option>
          <option value="pink">pink</option>
          <option value="green">green</option>
          <option value="gray">gray</option>
        </select>
        <button type="submit" name="cambiar">Cambiar</button>
      </form>
    <!-- </div> -->
  </body>
</html>
