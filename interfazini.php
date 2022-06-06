
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

<link rel="stylesheet" href="interfazini.css"> 
</head>


<body  style="background-color:#429AE8;">
  <div style="margin: 3%;">
  <?php
   $idusuario= @$_POST["id_usuario"];
   ?> 
   

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><p style="color:#7C1AB4">Encuestor</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="iniciarseccion.php"><form method='POST' action='editperfil.php'>
             
          
             </form> <span class="sr-only">(current)</span></a>
      </li>
     <!--  <li class="nav-item">
     <a class="nav-link" href="editperfil.php">Editar perfil </a>
      <input type='hidden' name='id' value='$fila[id_usuario]'>
      <input type='hidden' name='nombre' value='$fila[nombre]'>
      <input type='hidden' name='correo' value='$fila[correo]'>
      <input type='hidden' name='clave' value='$fila[contraseña]'>
         
      </li>-->
      
      <li class="nav-item">
      <a class="nav-link" href="responderencuestas.php">Responder encuestas </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="interfaziniuser.php">Volver </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="index.php">Cerrar Sesión </a>
      </li>

      
      
     
    </ul>
  
      <form method='POST' action='interfazini.php'>
            <input type='text' name='id' placeholder="Nombre de la encuesta" aria-label="Search">
            <button type="submit"class="btn btn-outline-secondary" OnClick="//interfazini.php"> Consultar</button>
            </form>
            
         
      
      
    </form>
  </div>
</nav>
<br>
<center><h1><p style="color:white">Bienvenido <?php echo $_SESSION["nombre"]; ?></p></h1></center>
<br>
<br>


<div class = "agregarEncuesta">
  <form  method='POST' action='agregarencu.php'>
          <div class="form-group">
         <center> <h3><p style="color:white">Crear Encuesta</p></h3></center>

            <label for="exampleInputEmail1" ><p style="color:#fffff">Nombre</p></label>
 
            
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='nombre'>
          
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><p style="color:#fffff">Descripción</p></label>
            <input type="text" class="form-control" id="exampleInputPassword1" name='descripcion'>
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1"><p style="color:#fffff"></p></label>
            <?php echo "<br><input type='hidden' name='id_usuario' value='$idusuario'>" ; ?>
            
         
           </div>
         
         
            <center>
            <br>

            <button type="submit" class="btn btn-secondary">Agregar</button>

            <br>
            
          

            
         </center>
          </div>
          
    </div>

    

  

<br>
<br>
<br>

         


  <div style = "width:60%">
    <table  class = "table">
      
    <thead class="thead-dark">
    <tr>
      <th scope="col">ID de la Encuesta</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">ID del Usuario</th>
      <th scope="col">Funciones</th>
      </tbody>
      


    <?php

      
    
  
      if(@$_POST["id"] != ""){
        $sql = "Select * from encuesta where nombre like '%$_POST[id]%' and usuario_id ='".$_SESSION["id"]."' ";
        
      }else{
        $sql = "Select * from encuesta where usuario_id ='".$_SESSION["id"]."' ";
        
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
              <form method='POST' action='eliminar.php'>
                <input type='hidden' name='id' value='$fila[id_encuesta]'>
                <button type='submit'class='btn btn-outline-danger'> Eliminar</button>
              </form>

              <form method='POST' action='modificarencu.php'>
              <input type='hidden' name='id_encuesta' value='$fila[id_encuesta]'>
              <input type='hidden' name='nombre' value='$fila[nombre]'>
              <input type='hidden' name='descripcion' value='$fila[descripcion]'>
              <button type='submit'class='btn btn-outline-secondary'> Editar</button>
              
                </form>

                <form method='POST' action='agregarpreg.php'>
                <input type='hidden' name='id' value='$fila[id_encuesta]'>
                <button type='submit'class='btn btn-outline-secondary'> Agregar pregunta</button>
                </form>

                

              

                
            

                
              </form>
            </td>
          </tr>
          ";

  
        }
      }

      

    ?>

    </table>
    </div>
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





