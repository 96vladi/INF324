<?php
  // codigo php para mostar numero de aprobados por departamento
  include("conexion.php");
  $not = $conexion->query("
  SELECT (CASE
                    	WHEN LResidencia = 02 THEN 'La Paz'
                     	WHEN LResidencia = 03 THEN 'Cochabamba'
                     	WHEN LResidencia = 01 THEN 'Chuquisaca'
                     	WHEN LResidencia = 04 THEN 'Oruro'
                     	WHEN LResidencia = 05 THEN 'Potosi'
                     	WHEN LResidencia = 06 THEN 'Tarija'
                     	WHEN LResidencia = 07 THEN 'Santa Cruz'
                     	WHEN LResidencia = 08 THEN 'Beni'
                     	WHEN LResidencia = 09 THEN 'Pando'
                    	ELSE 'otro'
                      END) AS Departamento,COUNT(i.LResidencia) NumeroAprobados
                      FROM identificador i, notas n
                      WHERE i.Ci = n.Ci AND n.Nota>=51
                      GROUP BY i.LResidencia");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Miestilo.css">
    <style>
    a{
      display: block;
      margin-top: 40px;
      font-size: 20px;
      padding: 5px;
      border: 1px solid white;
      width: 100%;
      max-width: 100px;
      margin: auto;
      margin-top: 0px;
      background: rgba(0,0,0,0.6);
      text-aling: center;
      padding: 10px;
    }
    header{
      color: white;
      margin: auto;
      padding: 10px;
      text-align: center;
      font-size: 20px;
      width: 100%;
      height: 60px;
      background:rgba(0,0,0,0.6);
      border:2px solid white;
      border-radius:0px 0px 0px 0px;
    }
    table{
      color: white;
      float: center;
      display: inline-table;
      width: 30%;
      background:rgba(54,54,54,0.7);
      margin: 100px;
      padding: 20px 20px 20px 20px;
      border: 1px solid white;
      border-radius:35px 35px 35px 35px;
    }
    </style>
  </head>
  <body background="img/fondo.jpg">
    <header>
      <h2>MOSTRAR NOTAS POR DEPARTAMENTO</h2>
    </header>
    <section>
      <table border="1">
        <tr>
          <th>Departamento</th>
          <th>Numero de aprobados</th>
        </tr>
        <?php
        while ($Notas = $not->fetch())
        {
          echo "<tr>";
            echo       "<td>".$Notas['Departamento']."</td>";
            echo       "<td>".$Notas['NumeroAprobados']."</td>";
          echo     "</tr>";

        }
         ?>
      </table>
      <a href="loginVista.php">Atras</a>
    </section>
  </body>
</html>
