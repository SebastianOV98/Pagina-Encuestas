<?php

    $id = $_POST["id"];
 
    $res = $_POST["res"];
 
   

    include("conexionBD.php");
$mysqli = mysqli_connect("localhost", "root", "", "proyectofinal");

  if (mysqli_connect_errno($mysqli)) {
      echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  }
  $sql = "UPDATE respuestas SET  respuesta = '$res' WHERE id_respuesta =' $id'";

$resultado = mysqli_query($mysqli, $sql);
   
   if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
     }else{
        header("location:agregarresp.php");
  }


