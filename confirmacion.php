<?php

include 'conlead.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

//$id_usuario = $_GET['id'];

$mail = new PHPMailer(true);

try {
  //Server settings
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.googlemail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'jsebastianrincon@ucundinamarca.edu.co';                     //SMTP username
  $mail->Password   = 'secret';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
  $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
  $mail->setFrom('from@example.com', 'Mailer');
  //Recipients

  $sql = "SELECT usuarios.usuario,usuarios.password,usuarios.id_usuario, leads.nombre_lead,leads.primer_apellido_lead FROM usuarios INNER JOIN leads ON leads.email_lead = usuarios.usuario WHERE usuarios.id_usuario = '22'  ";

  $data = mysqli_query($conexion2, $sql);
  $resultado = mysqli_fetch_array($data);
  foreach ($resultado as $r) {

    $nombre = $resultado['nombre_lead'] . '' . $resultado['primer_apellido_lead'];

    $mail->addAddress($resultado['usuario'], $nombre);     //Add a recipient

  }
  $subject = 'Confirmacion de Usuario';

  $message = '';
  $message .= "<h1>'.$subject.'</h1>";
  $message .= '<p>.Usuario:.</p>' . $resultado['usuario'];
  $message .= '<p>.Password:.</p>' . $resultado['password'];



  //Content
  $mail->CharSet = 'UTF-8';
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = $subject;
  $mail->Body    = $message;


  $mail->send();
  echo 'Correo enviado correctamente';
} catch (Exception $e) {
  echo "Ha ocurrido un error. Mailer Error: {$mail->ErrorInfo}";
}
