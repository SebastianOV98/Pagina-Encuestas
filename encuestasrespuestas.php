<?php
 
echo "<br>";


  for($i=0; $i <$_POST["cantidad"];$i++){

  $idencuesta = $_POST['enc'.$i];
  $idpregunta = $_POST['id_preg_'.$i];
  $respuesta = $_POST['preg_'.$i];
  $pregunta = $_POST['preg'.$i];

  include("bd.php");
  $sql = "INSERT INTO `respuestasencu` (`id_respuestasencu`, `id_pregunta`, `respuestaencu`, `pregunta`, `id_encuesta`) VALUES (NULL, '$idpregunta', '$respuesta', '$pregunta', '$idencuesta');";

  $resultado = mysqli_query($mysqli, $sql);

  if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
  }else{
    echo "Almacenado correctamente";
  }
  
     
      

  }

  header("location:responderencuestas.php")
?>