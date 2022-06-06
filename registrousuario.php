<html>

<script>
    function validarCampo() {
        correo = document.getElementById("exampleInputPassword1").value;
        boton = document.getElementById("boton");
        desplegable = document.getElementById("desplegable");
        
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
          if (xhr.readyState == 4) {
            if (xhr.responseText == 0) {
              //alert("Disponible");
              document.getElementById("contValidate").style.color = "green";
              document.getElementById("contValidate").style.display = "none";
              boton.disabled = false;

            } else {
              //alert("NO DISPONIBLE");
              document.getElementById("contValidate").style.color = "red";
             document.getElementById("contValidate").style.display = "block";
             
             boton.disabled = true;
            }
           
            //document.getElementById("contenedor").innerHTML = xhr.responseText;
          }
        };
        xhr.open(
          "GET",
          "http://localhost/Proyecto/js.php?correo=" + correo);
        xhr.send();
        
      }
      

      function validarNumeros(e){
        

        key = e.keyCode || e.which;

        teclado = String.fromCharCode(key);

        clave = "0123456789";
        
        especiales = "8-37-38-46";

        teclado_especial = false;

        for(var i in especiales){

          if(key==especiales[i]){
            teclado_especial = true;
          }
        }

        if(clave.indexOf(teclado)==-1 && !teclado_especial){
            return false;
        }

        desplegable.disabled = true;

      }

</script>
<head>
<title>Encuestor</title>
<link rel="icon" href="imagens/icon.ico">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<link rel="stylesheet" href="registrarusuario.css"> 


    <body style="background-color:#429AE8;">
    <div style=' margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);width: 500px;'>
        <form  method='POST' action='agregarusu.php' >
          <div class="form-group">
         <center> <h1><p style="color:white">Registrarse</p></h1></center>

            <label for="exampleInputEmail1" ><p style="color:white">Nombre</p></label>
 
            
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='nombres'>
          
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><p style="color:white">Correo</p></label>
            <input type="email" class="form-control" id="exampleInputPassword1" name='correo' onblur="validarCampo()">
            <div style="display: none;" id="contValidate">NO Disponible</div>
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1"><p style="color:white">Clave</p></label>
            <input type="text" class="form-control" id="exampleInputPassword2" name='clave' onkeypress = "return validarNumeros(event)">
            <small id="emailHelp" class="form-text text-muted">Sólo se permite registrar la contraseña con números.</small>
          </div>
          <div class="form-group">
            
          
          </div>
            <center>
            <br>

            <button type="submit" class="btn btn-secondary" id= "boton">Registrarse</button>
            
            <br>
            <br>

<button type="submit" class="btn btn-secondary" href="index.php">Volver</button>
          </center>
          </div>
         
          
        </form>
        </div>
    </div>
    

    </body>

    </html>