<?php

    $idencuesta = $_POST["id_encuesta"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
   

    include("conexionBD.php");
$mysqli = mysqli_connect("localhost", "root", "", "proyectofinal");

  if (mysqli_connect_errno($mysqli)) {
      echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  }
  $sql = "UPDATE encuesta SET nombre = '$nombre', descripcion = '$descripcion'  WHERE id_encuesta = $idencuesta";

$resultado = mysqli_query($mysqli, $sql);
   
   if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
     }else{
    echo "Actualizado correctamente";
  }

  header("location:interfazini.php");


?>