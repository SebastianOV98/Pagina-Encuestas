
<html>
<head>
<title>Encuestor</title>
<link rel="icon" href="imagens/icon.ico">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
  <body  style="background-color:#429AE8;">


    
    <div style=' margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);width: 500px;'>
    <div class = "agregarUsuario">
  <form  method='POST' action='editarusuario2.php'>

          <div class="form-group">
         <center> <h3><p style="color:White">Editar Usuario</p></h3></center>
          <label for="exampleInputEmail1" ><p >ID del Usuario</p></label>
              
            
          <?php echo "<br> <input type='text' name='id' value='$_POST[id_usuario]' readonly='readonly'>"; ?>
             </div>
            <div class="form-group">
        
      <label for="exampleInputPassword1"><p >nombre</p></label>
          <?php echo "<br><input type='text' name='nombre' value='$_POST[nombre]'>"; ?>
          </div>

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><p >Correo</p></label>
           <?php echo "<br> <input type='text' name='correo' value='$_POST[correo]'>";?>
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1"><p >clave</p></label>
            <?php echo "<br><input type='text' name='contraseña' value='$_POST[contraseña]'>"; ?>
          </div>
         
            <center>
            <br>
            
            <button type="submit" class="btn btn-primary">Modificar</button>
            
         </center>
         <br>
     <center><button type="submit" class="btn btn-secondary" >Volver</button></center>
          </div>
</div>




  </body>

  
</html>
