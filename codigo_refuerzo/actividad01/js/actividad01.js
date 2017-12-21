do {

	var numUsuario1 = prompt("por favor introduzca un n�mero par");
	var numUsuario2 = prompt("por favor introduzca otro n�mero par");

	if ( numUsuario1 != numUsuario2 && numUsuario1 % 2 == 0 && numUsuario2 % 2 == 0 ) {

		document.write ("En efecto son pares");

	} else {

		document.write("Los numeros no son pares");

	}

} while ( numUsuario1 == numUsuario2  || numUsuario1 % 2 == 1 || numUsuario2 % 2 == 1 );
