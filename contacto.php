<?php

if (empty($_POST['name']) && empty($_POST['email'])) {

	header('refresh:1; url=index.php');
}else{

	$nombre = $_POST['name'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['descripcion'];
	$bcc =  "Bcc: " . "\r\n";
	$cuerpomensaje = "Nombre: ".$nombre."\n"."E-Mail: ".$email."\n"."Telefono: ".$telefono."\n"."Mensaje: "."\n".$mensaje."\n\n\nURL: ";
	mail("", "LANDING", $cuerpomensaje, 'From:'. $email . "\r\n".$bcc);
	header('refresh:2; url=index.php');
}
?>

<center><h3>Gracias por escribirnos. Le enviaremos una respuesta a la brevedad posible</h3></center>
