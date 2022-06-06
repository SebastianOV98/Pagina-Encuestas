<?php
    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

    $correoDesde = "sebastianortizvilla1567@gmail.com";
    $clave = "";

    $para = $_POST["para"];
    $mensaje = $_POST["mensaje"];

    $plantilla = "<h1>Bienvenido ".$para." </h1> Este es su mensaje : ".$mensaje;

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
    
?>