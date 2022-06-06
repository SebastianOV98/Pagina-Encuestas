<?php

  $id = $_POST["id"];

  include("conexionBD.php");

  $sql = "DELETE FROM encuesta WHERE id_encuesta = '$id'";

  //echo $sql;
  //echo "<br>";

  $resultado = mysqli_query($mysqli, $sql);

  if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
  }else{
    echo "Elimino correctamente";
  }

  header("location:interfazini.php");

?>