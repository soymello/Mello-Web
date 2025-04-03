
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $mensaje = $_POST['mensaje'];

  $para = "tucorreo@ejemplo.com";
  $asunto = "Nuevo mensaje desde tu sitio MELLO";
  $contenido = "Nombre: $nombre\nCorreo: $correo\nMensaje:\n$mensaje";
  $headers = "From: $correo";

  if (mail($para, $asunto, $contenido, $headers)) {
    echo "Mensaje enviado con éxito.";
  } else {
    echo "Error al enviar el mensaje.";
  }
}
?>
