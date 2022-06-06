


<?php

  $nombre = $_POST["nombres"];
  
  $correo = $_POST["correo"];
  $contraseña = $_POST["clave"];
  $rol=1;


  include("bd.php");
  $sql = "INSERT INTO `usuario` (`id_usuario`, `nombre`, `correo`, `contraseña`, `id_roll`) VALUES (NULL, '$nombre', '$correo', '$contraseña', '$rol');";

  $resultado = mysqli_query($mysqli, $sql);

  if (!$resultado) {
    echo "Fallo al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
  }else{
    echo "Almacenado correctamente";
  }
 



    

?>

<?php

    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

    $correoDesde = "jadynjey@gmail.com";
    $clave = "saxabevvzklaelhp";

    $para = $_POST["correo"];
    $mensaje = "Gracias por registrarte! ";

    $plantilla = "<h1>Bienvenido a ENCUESTOR ".$para." </h1> ".$mensaje."<img src='https://www.educacionactiva.com/wp-content/uploads/2014/11/Bienvenido.png'>";

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication    
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
    
        
        //https://support.google.com/mail/answer/185833?hl=es-419 POR ACA INGRESAN PARA CREAR LA CLAVE DE LA APP
        $mail->Username   =  $correoDesde;                     // SMTP username
        $mail->Password   =  $clave;                               // SMTP password
  
        //Recipients
        $mail->setFrom( $correoDesde, $correoDesde); 
        
        //La siguiente linea, se repite N cantidad de veces como destinarios tenga
        $mail->addAddress($para, $para);     // Add a recipient
   
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Mensaje automatico';
        $mail->Body    =  $plantilla;
        $mail->AltBody =  $plantilla;
        $mail->send();

        echo 'Message has been sent';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
    }
     header("location:index.php")

    ?>

