var nombre="Diego";
var nmobres["DIEGO,Arturo","20","true"];

//En forma de objeto
var lenguages= new Array("PHP","JS","Go","C");
consol.log(nombre[0]);
consol.log(nombres[0]);
consol.log(lenguages.length)

var elemento=parseInt(prompt("¿Qué del arrreglo queieres"));
if (elemento>=lenguages.length) {
	alert("Introduce un número menor a "+ lenguages.length);
}else{
	alert("El elemento seleccionado es "+ lenguages[elemento]);
}

document.write()("<ul>");
for (var i =0; i < lenguajes.length; i++) {
	document.write("<li> Lenguajes en mi arreglo </li>");
}
document.write("<ul");
/*
//For each
//Funciones
function listarLenguas({
document.write("<ol>");
nombres.forEach(elemento,indice,datos)=>{
	consol.log(datos);
});
document.write("<li>Índice [" +indice +"]: elemento"+"</li>");
*/