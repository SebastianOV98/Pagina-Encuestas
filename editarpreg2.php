<?php

    $id = $_POST["id"];
    $preg = $_POST["preg"];
 
   

    include("conexionBD.php");
$mysqli = mysqli_connect("localhost", "root", "", "proyectofinal");

  if (mysqli_connect_errno($mysqli)) {
      echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  }
  echo $sql = "UPDATE pregunta SET pregunta = '$preg' WHERE id_pregunta ='$id'";

$resultado = mysqli_query($mysqli, $sql);
   
   if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
     }else{
        header("location:agregarpreg.php");
  }



?>