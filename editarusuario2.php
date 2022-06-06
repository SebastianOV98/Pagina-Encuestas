<?php

  

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $clave = $_POST["contraseña"];
    $id= $_POST["id"];
    
   

    include("conexionBD.php");
$mysqli = mysqli_connect("localhost", "root", "", "proyectofinal");

  if (mysqli_connect_errno($mysqli)) {
      echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
  }
  $sql = "UPDATE usuario SET nombre = '$nombre', correo = '$correo', contraseña = '$clave'  WHERE id_usuario= '$id'";

$resultado = mysqli_query($mysqli, $sql);
   
   if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
     }else{
        header("location:interfaziniuser.php");
  }


?>