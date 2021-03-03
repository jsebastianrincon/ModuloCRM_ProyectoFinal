<?php
//Codigo para la confirmacion y envio de Correos Electronicos
/*$sql = "SELECT * FROM leads 
      LEFT JOIN usuarios ON usuarios.usuario = leads.email_lead 
      WHERE leads.estado_lead = 1 
      AND leads.email_lead = usuarios.usuario 
      AND tipo_usuario = 2 ";
*/
//function get($body="",$asunto="");
require 'phpmailer/PHPMailerAutoload.php';

// Creando una nueva instancia de PHPMailer
$mail = new PHPMailer();


// Indicando el uso de SMTP
$mail->isSMTP();
$mail->SMTPDebug = 0;

// Agregando compatibilidad con HTML
$mail->Debugoutput = 'html';

// Estableciendo el nombre del servidor de email
$mail->Host = 'smtp.gmail.com';

// Estableciendo el puerto
$mail->Port = 587;

// Estableciendo el sistema de encriptación
$mail->SMTPSecure = 'tls';

// Para utilizar la autenticación SMTP
$mail->SMTPAuth = true;

// Nombre de usuario para la autenticación SMTP - usar email completo para gmail
$mail->Username = "usuario@gmail.com";

// Password para la autenticación SMTP
$mail->Password = "1234";
   
//Crear funcion estructura email
include("conlead.php");
$sql = "SELECT * FROM leads 
      LEFT JOIN usuarios ON usuarios.usuario = leads.email_lead 
      WHERE leads.estado_lead = 1 
      AND leads.email_lead = usuarios.usuario 
      AND tipo_usuario = 2 ";
$ppp = array();
$data = mysqli_query($conexion2, $sql) or die(mysqli_error($data));
$ppp = mysqli_fetch_array($data);
var_dump($ppp);
$asunto = "Asignacion de usuario inicio de sesion";
$mail->setFrom('usuario@gmail.com', 'Usuario');


// Estableciendo a quién se va a enviar el mail
$mail->addAddress('otrousuario@gmail.com', 'Otro usuario');
$body="";
$body = "<table id='data_table' class='table table-bordered' cellspacing='0' width='100%'>";
$body .= "<thead>";
$body ="<tr>";
                            <th>
                              <center style="visibility: hidden">----------------</center>
                              <center>Nombres </center>
                            </th>


                            <th>
                              <center style="visibility: hidden">---------------------</center>
                              <center>Apellidos </center>
                            </th>

                            <th>
                              <center style="visibility: hidden">---------------------</center>
                              <center>Compañia</center>
                            </th>

                            <th>
                              <center>Telefono</center>
                            </th>



                            <th>
                              <center style="visibility: hidden">----------------</center>
                              <center>Asignado</center>
                            </th>




                            <th>
                              <center style="visibility: hidden">--------</center>
                              <center>Estado</center>
                            </th>



                            <th>

                              <center style="visibility: hidden">------------------------------------------------------------------------------</center>
                              <center>Acciones</center>

                            </th>
                          </tr>
                        </thead>"


 //El asunto del mail
  $mail->Subject = $subject . $enviado;
   
  // Estableciendo el mensaje a enviar
  $mail->MsgHTML($message);
   
   
  // Adjuntando una imagen
  //$mail->addAttachment('images/phpmailer_mini.png');
   
  // Enviando el mensaje y controlando los errores
  if (!$mail->send()) {
    echo "No se pudo enviar el correo. Intentelo más tarde.";
  } else {
    echo "Gracias por contactarnos.";
  }