<?php
 session_start(); 
 if(@$_SESSION["nombre"]==""){
     echo "Por favor inicia sección";
 }else {
    if(@$_SESSION["rol"]==2){
?>
<html>

<head>
<title>Encuestor</title>
<link rel="icon" href="imagens/icon.ico">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" href="interfaziniuser.css"> 
</head>


<body  style="background-color:#429AE8;">
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
      <a class="nav-link" href="imprimir.php">Imprimir Respuestas </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="cerrarsesion.php">Cerrar Sesión </a>
      </li>
     
      
      <!----<form method='POST' action='interfazini.php'>
      <a class="nav-link" href="interfazini.php">Agregar Encuestas </a>
      <input type='hidden' name='id' value='$fila[id_usuario]'>
      </li>
      </form>

      -->
      
     
    </ul>
  
      <form method='POST' action='interfaziniuser.php'>
            <input type='text' name='id_usuario' placeholder="Buscar Usuario (ID)" aria-label="Search">
            <button type="submit"class="btn btn-outline-secondary" OnClick="//interfaziniuser.php"> Consultar</button>
            </form>
            
         
      
      
    </form>
  </div>
</nav>
<br>
<center>
<h2> <p style="color:white">Bienvenido <?php echo $_SESSION["nombre"]; ?></p></h2>
</center>
<br>
<center>
<h3><p style="color:white">Has entrado con una cuenta de ADMIN</p></h3></center>
<br>




  
  <div class = "agregarUsuario">
  <form  method='POST' action='agregarusuario.php'>
          <div class="form-group">
         <center> <h3><p style="color:white">Crear Usuario</p></h3></center>

            <label for="exampleInputEmail1" ><p style="color:#fffff">Nombre</p></label>
 
            
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='nombre'>
          
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><p style="color:#fffff">Correo</p></label>
            <input type="email" class="form-control" id="exampleInputPassword1" name='correo'>
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1"><p style="color:#fffff">Clave</p></label>
            <input type="text" class="form-control" id="exampleInputPassword1" name='clave'>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><p style="color:#fffff">Rol</p></label>
          <select name='rol'>
            <?php
              include("bd.php");
              $sql = "Select * from rol";
              $resultado = mysqli_query($mysqli, $sql);
              if (!$resultado) {
                echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
              }else{  
                while($fila = mysqli_fetch_assoc($resultado)){
                  echo "
                    <option value='$fila[id]'>$fila[descripcion]</option>
                  ";
              
                }
              }
            ?>
          </select>
          </div>
            <center>
            <br>

            <button type="submit" class="btn btn-secondary">Agregar</button>
            
         </center>
          </div>
  
<br>
<br>
<br>

    <div style = "width:60%">
    <table  class = "table">
      
    <thead class="thead-dark">
    <tr>
      <th scope="col">ID del Usuario</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Rol del Usuario</th>
      <th scope="col">Funciones</th>
      </tbody>
      


    <?php

    
  
      if(@$_POST["id_usuario"] != ""){
        $sql = "Select * from usuario where id_usuario like '%$_POST[id_usuario]%'";
        
      }else{
        $sql = "Select * from usuario  ";
        
      }

      include("bd.php");
      
    
    
      $resultado = mysqli_query($mysqli, $sql);
    
      if (!$resultado) {
        echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
      }else{  
        while($fila = mysqli_fetch_assoc($resultado)){



          echo "
         
          <tr  >
            <td bgcolor='white'>
             $fila[id_usuario]
            </td>
            <td bgcolor='white'>
              $fila[nombre]
            </td>
            <td bgcolor='white'>
              $fila[correo]
            </td>
            <td bgcolor='white'>
              $fila[contraseña]
            </td>
            <td bgcolor='white'>
            $fila[id_roll]
          </td>
            <td bgcolor='white'>
              <form method='POST' action='eliminarusuario.php'>
                <input type='hidden' name='id_usuario' value='$fila[id_usuario]'>
                <button type='submit'class='btn btn-outline-danger'> Eliminar</button>
            
              </form>
              

              <form method='POST' action='editarusuario.php'>
              <input type='hidden' name='id_usuario' value='$fila[id_usuario]'>
              <input type='hidden' name='nombre' value='$fila[nombre]'>
              <input type='hidden' name='correo' value='$fila[correo]'>
              <input type='hidden' name='contraseña' value='$fila[contraseña]'>
              <button type='submit'class='btn btn-outline-secondary'> Editar</button>
                </form>


                <form method='POST' action='interfazini.php'>
                <input type='hidden' name='id_usuario' value='$fila[id_usuario]'>
                <button type='submit'class='btn btn-outline-secondary'> Agregar encuesta</button>

              

                
            

                
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
  
  
    <br>

</body>



</html>

<?php
  }else{
    echo "No tienes permiso  <a href='cerrarSesion.php'>Cerrar sesion</a>";

  }
}
?>
