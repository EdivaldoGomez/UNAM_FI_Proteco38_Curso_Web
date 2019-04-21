
var count=0;
var intId=setInterval(counter,1000);

function counter(){
	console.log(++count)
}

/*
var idTimeout setTimeout(bye,3000);
console.log('Hola');
clearTimeout(idTimeout);
function bye(){
	console.log('Adios')
}
*/
/*
var idTimeout setTimeout(bye,5000);
alert('Hola');
function bye(){
	alert('Adios')
}
*/

var saludo=function () {
	alert('Saludos');
};

var boton=document.getElementById('boton');
boton.addEventListener("click",saludo);

var input=document.getElementById('input');
input.addEventListener("focus",saludo);