// Prueba en consola
console.log("Probando 1... 2... 3... ¡Listo!");

// Mostrar Fecha
let today = new Date();
let	months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
let date = [today.getDate(), months[today.getMonth()], today.getFullYear()];
let	year = today.getFullYear();

document.getElementById("fecha").innerHTML = date[0].toString() + " de " + date[1] + " del " + date[2].toString();
document.getElementById("year").innerHTML = year;

// Disclaimer Link
let disclaimer = document.getElementById("disclaimer-link");

disclaimer.onclick = function() {
	let letrero = document.getElementById("disclaimer");
	letrero.classList.add("alert");
	setTimeout(function() {
    	letrero.classList.remove("alert");
    }, 2000);
};


// Modo Nocturno
let btnNocturno = document.getElementById("boton-nocturno");

btnNocturno.onclick = function() {
	document.getElementById("luz").classList.toggle("encendido");
}

// Fixed Menu
let h = document.getElementById("nav-fixed"),
	nav = document.querySelector("nav"),
	stuck = false,
	stickPoint = getDistance();

function getDistance() {
    let topDist = h.offsetTop;
    return topDist;
}

window.onscroll = function(e) {
    let distance = getDistance() - window.pageYOffset;
    let offset = window.pageYOffset;

    if ( (distance <= 0) && !stuck) {
        h.classList.add('sticky');
        nav.classList.add('contenedor');
        stuck = true;
    } else if (stuck && (offset <= stickPoint)){
        h.classList.remove('sticky');
        nav.classList.remove('contenedor');
        stuck = false;
    }
}