<?php
  require('ConexionBD.php');

  $correo= $_GET["correo"];

  $resultado = $mysqli->query("Select * from usuario where correo ='$correo'");
  
  echo mysqli_num_rows($resultado);

?>