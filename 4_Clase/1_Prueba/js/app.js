document.querySelector("p").innerHTML="Busqué por etiqueta";
document.querySelector("p.buscandoClase").innerHTML="Busqué por Clase";
document.getElementById("buscandoId").innerHTML="Busqué por Id";

var nombre=document.getElementsByName('botoncito')[0].value;
alert(nombre);

var x =5;
var x=y+2;
document.write('\n Operación suma:'+ x);

var z =5;
var a=--z;
document.write('\n Decremento:'+a);

var b=5;
var c=b%2;
document.write('\nMódulo:'+c);

var d=5;
var e=10;
d=e;

var texto texto1 = "Hola", texto1="Mundo";
var valor=5,valor1=6, valor2=7, valor3=8;
var val=true, val1=true;
//Numero + numero -> suma
valor += 2;
//Bolean + numero -> suma
val += 1;
//Numero + cadena -> concatenacion
valor += texto;
//Cadena + boleano ->
texto1+=false;
//infinito
valor3/=0;
document.write('Prueba1:' +valor+ 'Prueba2: '+val+ 'Prueba3');