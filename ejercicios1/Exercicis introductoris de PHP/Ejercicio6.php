<?php

$nombre = "Gabriel";
$apellidos = "Mas";
$edad = "19"

 ?>

 <!DOCTYPE html>
<html>
<body>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<table>

  <tr>
    <td>Nombre: </td>
    <td><?php echo $nombre ?></td>

  </tr>
  <tr>
    <td>Apellidos:</td>
    <td><?php echo $apellidos ?></td>

  </tr>
  <tr>
    <td>Edad: </td>
    <td><?php echo $edad ?> </td>

  </tr>

</table>

</body>
</html>
