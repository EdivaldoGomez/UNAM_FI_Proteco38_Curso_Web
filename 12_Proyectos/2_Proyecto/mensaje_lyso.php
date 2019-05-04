<?php 
	//Enviando un mensaje con php
	//Correo a donde va a llegar el mensaje
	$destino="informes_lyso@comunidadatl.com";
	$nombre=$_POST["nom"];
	$correo=$_POST["cor"];
	$mensaje=$_POST["men"];
	$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
	mail($destino,"Correo desde el sitio en línea LLantas y Servicios Ocotlán", $contenido);
	header("Location: llantasocotlan.php");
?>