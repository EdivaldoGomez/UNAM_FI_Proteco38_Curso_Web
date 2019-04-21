<?php 
//Arreglos simples (vectores)
$peliculas = array("Ironman","Batman","Spiderman");
$deportes = ["Fubol","Basketbol","Beisbol"];

var_dump($peliculas);
var_dump("$deportes[2]");
echo "<br><br>";

//For each: especial para recorrer arreglo
echo "<h1>Lista de peliculas</h1>";
echo "<ul>";
foreach ($peliculas as $indice => $pelicula) {
	echo "<li>Índce del arreglo[$indice]: $pelicula </li>";
}

//Arreglos asociativos: es posible definir índices alfanumericos
$personas = array(
	"nombre"=> "Diego",
	"apellido"=> "Bernal",
	"edad"=> 20
);
var_dump($personas);
echo "<h3>$personas[nombre]</h3>";

//Arreglos multidimensional
$contactos = array(
	array(
		"nombre"=> "Diego",
		"apellido"=> "Bernal",
		"edad"=> 20
	),
	array(
		"nombre"=> "Diego",
		"apellido"=> "Bernal",
		"edad"=> 20
	),
	array(
		"nombre"=> "Diego",
		"apellido"=> "Bernal",
		"edad"=> 20
	)
);
var_dump($contactos);

foreach ($contactos as $llave => $value){
	var_dump($contactos[$llave]['edad']);
}
?>