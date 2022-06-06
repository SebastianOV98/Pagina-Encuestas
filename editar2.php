<?php
$nombre = $_POST["nombre"];
  $idencuesta = $_POST["id_encuestas"];
  $descripcion = $_POST["descripcion"];
  



  $mysqli = mysqli_connect("localhost", "root", "", "proyectoencu");
  if (mysqli_connect_errno($mysqli)) {
      echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  }
  $sql = "UPDATE encuesta SET nombre = '$nombre', descripcion = '$descripcion'
    WHERE id_encuestas = $idencuesta";

$resultado = mysqli_query($mysqli, $sql);
   
   if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
     }else{
    echo "Actualizado correctamente";
  }



?>