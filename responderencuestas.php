
<?php
 session_start(); 
 if(@$_SESSION["nombre"]==""){
     echo "Por favor inicia sección";
 }else {
   
      if(@$_SESSION["rol"]==1 || @$_SESSION["rol"]==2){
      
?>
<html>

<head>
<title>Encuestor</title>
<link rel="icon" href="imagens/icon.ico">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>


<body style="background-color:#429AE8;">

<div style="margin: 3%;">


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><p style="color:#7C1AB4">Encuestor</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="iniciarseccion.php">Cambiar de Cuenta <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="cerrarsesion.php">Cerrar Sesión </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="index.php">Volver </a>
      </li>


      
      
     
    </ul>
  
      <form method='POST' action='responderencuestas.php'>
            <input type='text' name='id' placeholder="Buscar Encuesta" aria-label="Search">
            <button type="submit"class="btn btn-outline-secondary" OnClick="//respuestaencuestas.php"> Consultar</button>
            </form>
            
      
      
    </form>
  </div>
</nav>

  
<center>
  <form method='POST' action='agregarencu.php'>
      
      
      
        <?php
          include("conexionBD.php");
          $sql = "Select * from encuesta";
          $resultado = mysqli_query($mysqli, $sql);
          if (!$resultado) {
            echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
          }else{  
            while($fila = mysqli_fetch_assoc($resultado)){
              
            }
          }
        ?>
      </select>
 
      <br>
   
    </form>
    </center>
<br>
<br>
<br>
          
         
<div style = "width:100%">

    <table class = "table">
      <thead class="thead-dark">
        <th scope="col">
          ID de la encuesta
        </td>
        <th scope="col">
          Nombre
        </td>
        <th scope="col">
        descripción
        </td>
        <th scope="col">
          ID del usuario
        </td>
        <th scope="col">
          Funciones
        </td>
        
      </tr>
      


    <?php
  
      if(@$_POST["id"] != ""){
        $sql = "Select * from encuesta where usuario_id like '%$_POST[id]%'";
        
      }else{
        $sql = "Select * from encuesta where id_encuesta ";
        
      }

      include("bd.php");
      
    
    
      $resultado = mysqli_query($mysqli, $sql);
    
      if (!$resultado) {
        echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
      }else{  
        while($fila = mysqli_fetch_assoc($resultado)){



          echo "
          <tr>
            <td bgcolor='white'>
              $fila[id_encuesta]
            </td>
            <td bgcolor='white'>
              $fila[nombre]
            </td>
            <td bgcolor='white'>
              $fila[descripcion]
            </td>
            <td bgcolor='white'>
              $fila[usuario_id]
            </td>
            <td bgcolor='white'>
              <form method='POST' action='responderencuestas2.php'>
                <input type='hidden' name='id' value='$fila[id_encuesta]'>
                <button type='submit'class='btn btn-outline-secondary'> Responder</button>
              </form>


                
              </form>
            </td>
          </tr>
          ";

  
        }
      }

      

    ?>

    </table>

    <br>
    <br>
   
</body>



</html>

<?php
  }else{
    echo "No tienes permiso  <a href='cerrarSesion.php'>Cerrar sesion</a>";

  }
}
?>


 