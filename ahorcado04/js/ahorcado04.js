var equipos = ["madrid", "valencia", "barcelona", "levante", "sevilla"];

var posRandom = Math.random() * 4;
var posRound = Math.round(posRandom);

var adivinar = equipos[posRound];

var palabraCeros = "";

var intentos = 0;

for (var i = 0; i < adivinar.length; i++) {

	palabraCeros = palabraCeros + "0";
}

var objFormulario = document.forms["formulario"];
var objDivPalabra = document.getElementById("adivinar");
objDivPalabra.innerHTML = palabraCeros;

console.log(palabraCeros);

function comprobarLetra() {
  var letraBucle = "";
  var acertado = false;
  var letraAcertada = false;
	var newPalabraCeros="";
	var letraUsuario = objFormulario.letra.value;

  if ( isNaN(letraUsuario) ){

		// Recorremos la palabra letra a letra.
		for (var j= 0; j < adivinar.length; j++) {

			letraBucle = adivinar.charAt(j);

			if (letraUsuario == letraBucle) {

				letraAcertada = true;
				newPalabraCeros = newPalabraCeros + letraUsuario;


			} else {
				newPalabraCeros = newPalabraCeros + palabraCeros.charAt(j);

			}
		}

  palabraCeros = newPalabraCeros;

  }

  if ( letraAcertada == false ) {

    alert("Lo siento no has acertado");
    intentos++;
		letraUsuario = "";

  } else {

    objDivPalabra.innerHTML = palabraCeros;

  }


  if ( palabraCeros == adivinar ) {

  	acertado = true;

  }

  if ( acertado == true ) {

  	alert("Enhorabuen has ganado");

  } else if ( intentos >= 4 ) {

  	alert("Eres un fracasado!");

  }
}
