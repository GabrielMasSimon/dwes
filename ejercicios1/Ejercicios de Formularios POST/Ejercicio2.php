<?php

$nom = $_POST['nom'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$aficiones = $_POST['aficiones'];





?>

<html>
<body>

  <table>
    <tr>
      <td> Nombre:<?php echo $nom; ?> </td>
      <td> Edat:<?php echo $edad; ?> </td>
      <td> Email:<?php echo $email; ?> </td>
      <td> Sexo:<?php echo $sexo; ?> </td>
      <td> Aficiones:<?php echo $aficiones; ?> </td>

    </tr>

  </table>

</body>
</html>
