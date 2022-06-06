<html>
  
  <form method='POST' action='buscarencu.php'>
            Digite un id de una encuesta si quiere buscar algo especifico:
            <input type='text' name='id'>
            
          </form>
<br>
<br>
<br>

    <table border='1'>
      <tr>
        <td>
          id_encuesta
        </td>
        <td>
          nombre
        </td>
        <td>
        descripcion
        </td>
        <td>
          usuario_id
        </td>
       
      


    <?php
  
      if(@$_POST["id"] != ""){
        $sql = "Select * from encuesta where id_encuesta like '%$_POST[id]%'";
      }else{
        $sql = "Select * from encuesta";
      }

      include("conexionBD.php");
      
    
    
      $resultado = mysqli_query($mysqli, $sql);
    
      if (!$resultado) {
        echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
      }else{  
        while($fila = mysqli_fetch_assoc($resultado)){

          echo "
          <tr>
            <td>
              $fila[usuario_id]
            </td>
            <td>
              $fila[nombre]
            </td>
            <td>
              $fila[descripcion]
            </td>
            <td>
              $fila[id_encuesta]
            </td>
            <td>
              <form method='POST' action='eliminar.php'>
                <input type='hidden' name='id' value='$fila[id_encuesta]'>
                <input type='submit' value='eliminar'>
              </form>

              <form method='POST' action='editar.php'>
                <input type='hidden' name='id_encuesta' value='$fila[id_encuesta]'>
                <input type='hidden' name='nombre' value='$fila[nombre]'>
                <input type='hidden' name='descripcion' value='$fila[descripcion]'>
                <input type='hidden' name='usuario_id' value='$fila[usuario_id]'>
                <input type='submit' value='Editar'>
              </form>
            </td>
          </tr>
          ";

  
        }
      }

    ?>
     
      
    </html>