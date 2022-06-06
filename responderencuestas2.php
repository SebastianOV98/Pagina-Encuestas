

<html>

<head>
<title>Encuestor</title>
<link rel="icon" href="imagens/icon.ico">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<link rel="stylesheet" href="responderencuestas.css">


<script type="text/javascript">
function carga(){
    contador_s=0;
    contador_m=0;
    s= document.getElementById("segundos");
    m=document.getElementById("minutos");


   window.setInterval(
       function() {
           if(contador_s==60){
               contador_s=0;
               contador_m++;
               m.innerHTML=contador_m;
               if(contador_m==0){
                   contador_m=0
               }
           }
           s.innerHTML=contador_s;
           contador_s++;
          
       
   }, 1000);
}
</script>


</head >

<body style="background-color:#429AE8;" onload="carga()">
<br/>
<center>
<div style="margin: 3%; width: 1000px; height: 10px;">
<div class = "cuadrito">
<h1>
<span id="minutos">0</span>:<span id="segundos">0</span>
</h1>
</center>
</div>









<center>

<br/>
<br/>


<form action='encuestasrespuestas.php' method='POST'>
<div style="margin: 1%; width: 1000px; height: 10px;">


  

    
    <div class = "cuadro">
    <br/>
    
    <form  method='POST' action='encuestasrespuestas.php'>
    <center><h1> <p style="color:black">Encuesta </p></h1></center>
    <br/>
    <?php
        session_start();
        
        $id = $_POST["id"];

        
                                        require('bd.php');

                                        $resultado = $mysqli->query("Select * from pregunta where id_encuesta = '$id'");

                                        $contador = 0;
                                        $contadorPregunta = 1;
                                        while ($fila = $resultado->fetch_assoc()) {
                                          echo $contadorPregunta.". ";
                                          echo $fila["pregunta"];
                                          echo "<br>";   

                                           
                                         
                                          $resultado2 = $mysqli->query("Select * from respuestas where id_pregunta = '$fila[id_pregunta]'");

                                          if(mysqli_num_rows($resultado2) == 0){
                                           
                                              echo "<input name='preg_$contador' type='text'/> ";
                                             
                                              
                                              
                                             
                                          }
                                              
                                             else{

                                            
                                              while ($fila2 = $resultado2->fetch_assoc()) {

                                                echo "<br>";
                                              
                                                  echo "<input name='preg_$contador' type='radio' value='$fila2[respuesta]'/> $fila2[respuesta]";
                                                  
                                              } 
                                             }

                                             echo "<br>";
                                             echo "<br>";
                                      
                                             echo "<input type='hidden' name='id_preg_$contador' value='".$fila["id_pregunta"]."'>";
                                             echo "<input type='hidden' name='preg$contador' value='".$fila["pregunta"]."'>";
                                            
                                             echo "<input type='hidden' name='enc$contador' value='".$fila["id_encuesta"]."'>";
                                             
                                             echo "<br>";
                                            echo "<br>";
                                            $contador++;

                                            $contadorPregunta++;
                                        } 
                                        
                                        
                                        echo "<input type='hidden' name='cantidad' value='".($contador)."'>";
                                    ?>  

                                    <button type='submit'class="btn btn-secondary" >Enviar respuesta</button>
                                    <br/>


                                    
     

                                    </form>


                                    <br/>

         
    
    </div>                            
                                       
</form>






<br/>
<br/>



</body>


</html>

