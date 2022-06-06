<?php

  $nombre = $_POST["nombre"];
  
  $correo = $_POST["correo"];
  $contraseña = $_POST["clave"];
  $rol=$_POST["rol"];


  include("bd.php");
  $sql = "INSERT INTO `usuario` (`id_usuario`, `nombre`, `correo`, `contraseña`, `id_roll`) VALUES (NULL, '$nombre', '$correo', '$contraseña', '$rol');";

  $resultado = mysqli_query($mysqli, $sql);

  if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
  }else{
    echo "Almacenado correctamente";
  }
  header("location:interfaziniuser.php")


?>