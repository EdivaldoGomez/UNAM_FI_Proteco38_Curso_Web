//Plantillas de texto

var nombre= "Edivaldo";
var apellido="Gómez"
var texto="Mi nombre es: "+nombre+" y mi apellido es: "+apellido;
document.write(texto);

//Nueva forma

var texto=` 
<h1> Hola a todos prebes</h1>
<h3>Mi nombre es: ${nombre}</h3>
<h3>Mi apellido es: ${apellido}</h3>
`;
document.write(texto);