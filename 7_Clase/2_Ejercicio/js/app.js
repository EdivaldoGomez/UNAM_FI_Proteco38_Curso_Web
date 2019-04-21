class Pelicula{
	constructor(nombre,id){
		this.nombre=nombre;
		this.id=id;
	}
	reproducir(){
		return`Reproduciendo películas ...${this.nombre}`;
	}
}

class Serie extends Pelicula{
	reproducir(){
		return `Reproduciendo capítulo ...${this.nombre}`;
	}
}

const PeliculaUno=new Pelicula('Avenger',1);
const PeliculaDos=new Pelicula('HSM2',2);
const SerieUno=new Serie('Titans',1);

var muestra1=function (){
	alert(PeliculaUno.reproducir());
};
var boton1=document.getElementById('btn1');
boton1.addEventListener("click",muestra1);

var muestra2=function (){
	alert(PeliculaDos.reproducir());
};
var boton2=document.getElementById('btn2');
boton2.addEventListener("click",muestra2);

var muestra3=function (){
	alert(SerieUno.reproducir());
};
var boton3=document.getElementById('btn3');
boton3.addEventListener("click",muestra3);
