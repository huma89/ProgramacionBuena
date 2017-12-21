//Le pedimos al usuario que realize una acción
var accionUsuario = prompt("Dale a enter para jugar al bingo!");

//Incializamos el numero aleatorio decimal
var numAleatorioDecimal = Math.random() * (90 - 1) + 1;

//Inicializamos el numero aleatorio entero
var numAleatorioEntero = Math.round(numAleatorioDecimal);

//Inicializamos la variable booleana
var apoyo = true;

function lanzarBola(){
    numAleatorioDecimal = Math.random() * (90 - 1) + 1;
    numAleatorioEntero = Math.round(numAleatorioDecimal);
    var accionUsuario = prompt("Puedes seguir jugando, pero si quieres terminar escribe fin. " + "El numero aleatorio es: " + numAleatorioEntero); 
	if ( accionUsuario == "fin" || accionUsuario == "FIN" )  {
        alert("FINAL");
	} else{
		setTimeout(lanzarBola, 1000);
	} 
}

window.onload =function() {
    setTimeout(lanzarBola, 1000);
};