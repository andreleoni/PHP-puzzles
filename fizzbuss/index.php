<?php

/*Neste problema, você deverá exibir uma lista de 1 a 100, um em cada linha, com as seguintes exceções:
Números divisíveis por 3 deve aparecer como 'Fizz' ao invés do número;
Números divisíveis por 5 devem aparecer como 'Buss' ao invés do número;
Números divisíveis por 3 e 5 devem aparecer como 'FIZZBUSS' ao invés do número'.*/

class fizzbuss {

	function __construct() {

	}

	function impressaoNumeros() {
		for ($i=1; $i <= 100; $i++) { 
			echo "<br />";		
			if (!($i % 3) && ($i % 5)) {
				echo "Fizz";
			} else if (($i % 3) && !($i % 5)){
				echo "Buss";
			} else if (!($i % 3) && !($i % 5)){
				echo "FIZZBUSS";
			} else {
				echo "$i";
			}
		}
	}
}

$funcao = new fizzbuss();

$funcao-> impressaoNumeros();