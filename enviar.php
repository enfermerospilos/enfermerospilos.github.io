<?php
	$destino="docencia2379@gmail.com"
	$nombre=$_post["Nombre"];
	$Correo=$_post["Correo"];
	$Telefono=$_post["Telefono"];
	$mensaje=$_post["mensaje"];
	$contenido="Nombre: " . $nombre . "\nCorreo:" . $correo . "\Telefono: " . $telefono . "\nmensaje: " . $mensaje;
	mail($destino, "docencia2379@gmail.com");
	header("Location:gracias.html");
?>