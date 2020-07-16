<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      a{
        display: block;
        margin-top: 40px;
        font-size: 20px;
        padding: 5px;
        border: 1px solid white;
        width: 100%;
        max-width: 600px;
        margin: auto;
        margin-top: 0px;
        background: rgba(0,0,0,0.6);
        text-aling: center;
        padding: 10px;
      }
    </style>
    <link rel="stylesheet" href="Miestilo.css">
  </head>
  <body background="img/fondo.jpg">
      <header>
        <h1>INF-324</h1>
      </header>
        <aside class="">
          LOGIN
          <form method="post" action="login.php" class="form">
            Usuario <br>
            <input type="text" name="usuario" required>
            <br><br>
            Contraseña <br>
            <input type="password" name="clave" required>
            <br><br>
              <?php if (!empty($error)): ?>
              <div class="mensaje">
                <?php echo $error; ?>
              </div>
            <?php endif; ?>
            <!-- <input type="submit" value="Ingresar"> -->
            <button type="submit" name="button">Ingresar</button>
          </form><br>
          <a href="notas.php">Numero de aprobados por departamento</a>
        </aside>
  </body>
</html>
