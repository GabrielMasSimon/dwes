<?php

$nom = $_POST['nom'];
$edad = $_POST['edad'];
$email = $_POST['email'];

?>

<html>
<body>

  <table>
    <tr>
      <td> Nombre:<?php echo $nom; ?> </td>
      <td> Edat:<?php echo $edad; ?> </td>
      <td> Email:<?php echo $email; ?> </td>
    </tr>

  </table>

</body>
</html>
