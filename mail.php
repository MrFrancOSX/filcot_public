<?php 

	// Datos del cliente
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Datos del receptor
    $to = "nmata@filcot.pe";
	$subject = "Potencial Cliente FILCOT WEB";
	
	$body = "Han recibido un nuevo correo de su página web Filcot.pe \n\n";
	$body .= "Nombre del cliente: $name \n";
	$body .= "Telefono del cliente: $phone \n";
	$body .= "Correo del cliente: $email \n";
	$body .= "Mensaje del cliente: $message ";
	

    mail($to, $subject, $body);
    header('Location: mensaje-enviado.php');
    

?>