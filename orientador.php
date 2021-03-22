<?php
$nombredelcentro = $_POST['nombredelcentro'];
$telefono = $_POST['telefono'];
$Correo = $_POST['Correo'];
$ubicacion = $_POST['ubicacion'];
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
<link rel="stylesheet" type="style.css" href="">
  	<title></title>
  </head>
  <body>
    <!--tabla-->
    <table class="defautl">
  <h1>Datos del orientador</h1>
  <tr><th>Nombre del centro</th>
      <th>telefono</th>
      <th>Correo</th>
      <th>Ubicacion</th>
      <th>materias</th>
    </tr>
    <tr>
    <td> <?php
  echo $nombredelcentro;  ?>   
  </td>
    <td> 
  <?php
  echo $telefono;  ?></td>
  <td>
  <?php
  echo $Correo;  ?>
  </td>
  <td>
  <?php
  echo $ubicacion;  ?>
  <td>
    <?php $Ingles ;   ?>
  </td>
  </table>
  </td>
  </tr>
  </form>
  </body>
  </html>
