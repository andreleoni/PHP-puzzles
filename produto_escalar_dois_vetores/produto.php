<?php
/*
Definimos dois vetores A e B de dimensão n em termos de componentes como:
A = (a1, a2, a3, ..., an) e B = (b1, b2, b3, ..., bn)
O produto escalar entre esses vetores é descrito como:
A . B = a1 * b1 + a2 * b2 + a3 * b3 + ... + an * bn
Desenvolva um programa que, dado dois vetores de dimensão n, retorne o produto escalar entre eles. 
*/

class produto {
	
	public function __construct($a) {
		
		$resultado = 0;

		for ($i=0; $i < $a; $i++) { 
			$array_a = array(
						$i => $i
						);
			$array_b = array(
						$i => $i
						);

			$resultado = ($array_a[$i] * $array_b[$i]) + $resultado;
			echo "</br>A: ".$array_a[$i];
			echo "</br>B: ".$array_b[$i];	
			echo "</br>".$resultado;	
		}
	}
}

$produto = new produto(10);

?>