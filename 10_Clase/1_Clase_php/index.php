<?php
	print "<h1> Hola Mundo desde print </h1>";
	echo "<h2> Hola Mundo desde ", "echo </h2>";
	echo "<h2> La función echo sí acepta mas de un parametro</h2>";

	//Variables
	$numero=5;
	echo "<br> Este es un número: $numero ",var_dump($numero);

	#Variables de texto
	$palabra="palabra";
	echo "<br> Este es un string: $palabra ",var_dump($palabra);

	//Boolean
	$True=true;
	$False=false;
	echo "<br> Este es un booleano: $True, $False",var_dump($True),var_dump($False);

	//Arreglos
	$colores= array("Rojo","Verde","Azul");
	echo "<br> Este es un arreglo: $colores, $colores[1] ",var_dump($colores);

	//null
	$nulo=null;
	echo "<br> Este es un nulo: $null ",var_dump($nulo);

?>