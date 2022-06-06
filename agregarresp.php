
<?php
 session_start(); 
 if(@$_SESSION["nombre"]==""){
     echo "Por favor inicia sección";
 }else {
  if(@$_SESSION["rol"]==1 || @$_SESSION["rol"]==2 ){
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
<link rel="stylesheet" href="agregarRespuesta.css"> 
</head>
<body  style="background-color:#429AE8;">
<?php
   $idres= @$_POST["idp"];
   $idres2=1;

   ?> 

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
      <a class="nav-link" href="interfazini.php">Volver </a>
      </li>

      
      
     
    </ul>
  
      <form method='POST' action='agregarresp.php'>
            <input type='text' name='id' placeholder="Buscar Respuesta (ID)" aria-label="Search">
            <button type="submit"class="btn btn-outline-secondary" OnClick="//agregarresp.php"> Consultar</button>
            </form>
            
      
      
    </form>
  </div>
</nav>


      
      <div class = "agregarRespuesta">
  <form  method='POST' action='agregarresp2.php'>
          <div class="form-group">
         <center> <h3><p style="color:white">Crear Respuesta</p></h3></center>

            <label for="exampleInputEmail1" ><p style="color:#fffff"></p></label>
            
            <?php echo "<br><input type='hidden' name='idp' value='$idres'>" ; ?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><p style="color:#fffff"></p></label>
            <?php echo "<br><input type='hidden' name='idu' value='$idres2'>" ; ?>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1"><p style="color:#fffff">Respuesta</p></label>
            <input type="text" class="form-control" id="exampleInputEmail1" name='respuesta'>
          </div>
          
          <br>

          <center>
          <button type="submit" class="btn btn-secondary">Agregar</button>
         </center>



        
          </select>
          </div>
          
          </div>

          </form>






        
    <br>
<br>
<br>

         
<br>
<br>
<br>

  <div style = "width:60%">

  <table class = "table">
  <thead class="thead-dark">
    
      <tr>
        <th scope="col">
       ID de la Respuesta 
          
        </td>
        <th scope="col">
          ID del Usuario
        </td>
        <th scope="col">
        ID de la Pregunta
        
        </td>
        <th scope="col">
        Respuesta
        </td>
        <th scope="col">
        </td>
      </body>
      


    <?php
  
      if(@$_POST["id"] != ""){
        $sql = "Select * from respuestas where id_respuesta like '%$_POST[id]%'";
      }else{
        $sql = "Select * from respuestas";
      }

      include("conexionBD.php");
      
    
    
      $resultado = mysqli_query($mysqli, $sql);
    
      if (!$resultado) {
        echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
      }else{  
        while($fila = mysqli_fetch_assoc($resultado)){

          echo "
          <tr>
            <td bgcolor='white'>
              $fila[id_respuesta]
            </td>
            <td bgcolor='white'>
              $fila[id_usuario]
            </td>
            <td bgcolor='white'>
              $fila[id_pregunta]
            </td>
            <td bgcolor='white'>
              $fila[respuesta]
            </td>
            
            <td bgcolor='white'>
              <form method='POST' action='eliminarrespuesta.php'>
                <input type='hidden' name='id' value='$fila[id_respuesta]'>
                <button type='submit'class='btn btn-outline-danger'> Eliminar</button>
              </form>

              <form method='POST' action='editarrespuesta.php'>
              <input type='hidden' name='id' value='$fila[id_respuesta]'>
              <input type='hidden' name='res' value='$fila[respuesta]'>
         
              <button type='submit'class='btn btn-outline-secondary'> Editar</button>
                
                
                </form>

                
            
        

                
        
            </td>
          </tr>
          ";

  
        }
      }

    ?>

    </table>
    </div>
   

</body>



</html>

<?php
  }else{
    echo "No tienes permiso  <a href='cerrarSesion.php'>Cerrar sesion</a>";

  }
}
?>
    