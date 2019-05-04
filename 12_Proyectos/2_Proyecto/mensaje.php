<?php 
	//Enviando un mensaje con php
	//Correo a donde va a llegar el mensaje
	$destino="edivaldo_gomez@comunidadatl.com";
	$nombre=$_POST["nom"];
	$correo=$_POST["cor"];
	$mensaje=$_POST["men"];
	$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
	mail($destino,"Correo desde el sitio en línea Comunidad Atl", $contenido);
	header("Location: index.php");
?>