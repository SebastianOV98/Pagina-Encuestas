<?php

  $pregunta = $_POST["pregunta"];
  
  $id = $_POST["id"];


  include("ConexionBD.php");
  $sql = "INSERT INTO `pregunta` (`id_pregunta`, `pregunta`, `id_encuesta`) VALUES (NULL, '$pregunta', '$id');";

  $resultado = mysqli_query($mysqli, $sql);

  if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
  }else{
    // echo "Almacenado correctamente";
  }

 



?>
<hmtl>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" href="agregarencu.css">


</head>
<body style="background-color:#429AE8;">

<center>
<div class = "boton">
<h1>Almacenado correctamente</h1>
<?php
     $idpre=@$_POST["id"];
    ?>
  <form method='POST' action='agregarpreg.php'>
  <?php echo "<br><input type='hidden' name='id' value='$idpre'>" ; ?>
                <button type='submit'class="btn btn-secondary"> Regresar</button>
                </form>

                </form>

</center>

</div>
        
             </html>