<head>
<title>Encuestor</title>
<link rel="icon" href="imagens/icon.ico">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="iniciarseccion.css"> 



</head>
<body style="background-color:#429AE8;">

    <div style=' margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);width: 500px;'>
    <form  method='POST' action='validar.php'>
      <div class="form-group">
      <center><h1> <p style="color:white">Iniciar Sesión</p></h1></center>
        <label for="exampleInputEmail1"> <p style="color:white">Correo</p></label>
        
        
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='correo'>
        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo con nadie mas.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1"> <p style="color:white">Contraseña</p></label>
        <input type="password" class="form-control" id="exampleInputPassword1" name='clave'>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Recordar</label>
       
       
        <br>
        <center><button type="submit" class="btn btn-secondary"  OnClick="//interfazini.php"> Ingresar</button></center>
        <br>
       
        
    
      
    </form>
  
       
    
    </div>
   
    <form  method='POST' action='index.php'>
    <center><button type="submit" class="btn btn-secondary"  href="index.php">Volver</button></center>
        
</form>

    </body>