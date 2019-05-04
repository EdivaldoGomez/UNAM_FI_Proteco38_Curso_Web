<?php
	echo "Hola este es el proceso php";
	//$usuario=$_GET['usuario'];
	//$password=$_GET['password'];
	$usuario=$_POST['usuario'];
	$password=$_POST['password'];
	echo "<h1> Bienvenido Usuario $usuario</h1>";
	echo "<h1> Su contraseña es $password</h1>";
?>