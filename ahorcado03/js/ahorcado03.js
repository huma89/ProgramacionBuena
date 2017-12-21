var equipos = ["madrid", "valencia", "barcelona", "levante", "sevilla"];

var posRandom = Math.random() * 4;

var posRound = Math.round(posRandom);

var adivinar = equipos[posRound];

var palabraCeros = "";

var intentos = 0;

var acertado = false;

var letraAcertada = false;

var letraUsuario = "";

var j = 0;

var letraBucle = "";


for (var i = 0; i < adivinar.length; i++) {

	palabraCeros = palabraCeros + "0";

}

console.log(palabraCeros);

do {
	letraAcertada = false;
	newPalabraCeros="";
	letraUsuario = prompt("Por favor introduzca una letra");

	if ( isNaN(letraUsuario) ){

		// Recorremos la palabra letra a letra. 
		for (j= 0; j < adivinar.length; j++) {

			letraBucle = adivinar.charAt(j);

			if (letraUsuario == letraBucle) {

				letraAcertada = true;
				newPalabraCeros = newPalabraCeros + letraUsuario;
				

			} else {
				newPalabraCeros = newPalabraCeros + palabraCeros.charAt(j);

			}
		}

		palabraCeros = newPalabraCeros;

		if (letraAcertada == false) {

			alert("Lo siento no has acertado");
			intentos++;

		} else {

			alert("Enhorabuena has encontrado la letra. La palabra oculta es " + palabraCeros);			

		}

	}

	if ( palabraCeros == adivinar ) {

		acertado = true;

	}

} while (intentos <= 4 && acertado == false );

if ( acertado == true ) {

	alert("Enhorabuen has ganado");

} else {

	alert("Eres un fracasado!");

} 

// ¿Cómo harías para que te diga que solo has aceetado la letra si la letra no la habías acertado ya? Nota: en cristiano: cuando una letra ya la hayas acertado decirle al usuario "error". 