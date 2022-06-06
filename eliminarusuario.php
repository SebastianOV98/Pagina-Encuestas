<?php

  $id = $_POST["id_usuario"];

  include("conexionBD.php");

  $sql = "DELETE FROM usuario WHERE id_usuario = '$id'";

  //echo $sql;
  //echo "<br>";

  $resultado = mysqli_query($mysqli, $sql);

  if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
  }else{
    echo "Elimino correctamente";
  }

  header("location:interfaziniuser.php");

?>