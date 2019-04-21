<?php 
	//Enviando un mensaje con php
	//Correo a donde va a llegar el mensaje
	$destino="edivaldo_gomez@comunidad.unam.mx";
	$nombre=$_POST["nom"];
	$correo=$_POST["cor"];
	$mensaje=$_POST["men"];
	$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje;
	mail($destino,"Correo desde el curso Web 38", $contenido);
	header("Location: index.html");
?>