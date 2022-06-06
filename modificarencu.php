
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
  <div style=' margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);width: 500px;'>
  
  <form  method='POST' action='modificarencu2.php'>  
   
      <div class="form-group">
      <center><h1> <p style="color:white">Modificar Encuesta</p></h1></center>
        
      <div class="form-group">
        <label for="exampleInputPassword1"> <p style="color:#fffff">ID de la encuesta</p></label>
        <?php echo "<br> <input type='text' name='id_encuesta' value='$_POST[id_encuesta]' readonly='readonly'>"; ?>
    
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1"> <p style="color:#fffff">Nombre</p></label>
        <?php echo "<br><input type='text' name='nombre' value='$_POST[nombre]'>"; ?>
      </div>
     
        
      <div class="form-group">
        <label class="form-check-label" for="exampleCheck1">Descripcion</label>
        <?php echo "<br><input type='text' name='descripcion' value='$_POST[descripcion]'>"; ?>
        </div>

        <div class="form-group form-check">

        <br>
        <center><button type="submit" class="btn btn-secondary"  OnClick="//modificarencu2.php"> Modificar</button></center>
        <br>
        <center><button type="submit" class="btn btn-secondary"  href="index.php">Volver</button></center>
       
        
    
    </div>
        
    </form>

  </body>
</html>
