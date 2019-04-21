<?php 
//Condicionales

//if
$color="Rojo";
if($color=="Rojo"){
	echo "<br>El color es Rojo";
}else{
	echo "<br>El color no es Rojo";
}

//elseif
if(isset($color)&&$color=="Rojo"){
	echo  "<br>Sí existe y es ROJO";
}elseif (isset($color)AND$color != "Rojo") {
	echo "Sí existe pero no es Rojo";
}elseif (!isset($color)) {
	echo "<br>La variable no existe";
}

?>