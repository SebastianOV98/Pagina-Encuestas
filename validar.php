<?php

 
session_start();
include("bd.php");
  $correo= $_POST["correo"];
  $clave= $_POST["clave"];
 $sql = "Select * from usuario where correo='$correo' and contraseña='$clave'";
          $resultado = mysqli_query($mysqli, $sql);
          if (!$resultado) {
            echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
          }else{  

            while($fila = mysqli_fetch_assoc($resultado)){
                $_SESSION["nombre"] = $fila["nombre"];
                $_SESSION["id"] = $fila["id_usuario"];
                $_SESSION["rol"] = $fila["id_roll"];
  
                if($fila["id_roll"] == 1){
                  header("location:responderencuestas.php");
                  exit();
                }else if($fila["id_roll"] == 2){
                  header("location:interfaziniuser.php");
                  exit();
                }
            } 
  
            

         
          }

          
?>
   
