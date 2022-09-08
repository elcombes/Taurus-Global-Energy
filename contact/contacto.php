<?php
/**
 * @version 1.0
 */

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["mensaje"]) ) {
    die ("It is necessary to complete all the information on the form");
}
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "c1951677.ferozo.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "website@taurusglobalenergy.com";  // Mi cuenta de correo
$smtpClave = "consultAsweb919100";  // Mi contraseña

// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "josefoucault@taurusglobalenergy.com";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 465; 
$mail->SMTPSecure = 'ssl';
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";


// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $email; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Contact from website"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "{$mensajeHtml} <br /><br />Mensaje recibido desde sitio web<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n Taurus Global Energy"; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    echo "<script>alert('The mail was sent correctly.');location.href ='https://taurusglobalenergy.com/';</script>";;
} else {
    echo "An unexpected error occurred.";
}
