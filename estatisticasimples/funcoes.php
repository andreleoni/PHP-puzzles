<?php

/*Sua tarefa é processar uma seqüência de números inteiros para determinar as seguintes estatísticas:
Valor mínimo
Valor máximo
Número de elementos na seqüência
Valor médio
Por exemplo para uma seqüência de números "6, 9, 15, -2, 92, 11", temos como saída:
Valor mínimo: -2
Valor máximo: 92
Número de elementos na seqüência: 6
Valor médio: 18.1666666
Traduzido de: http://www.cyber-dojo.com/
*/

class estatisticaSimples {
	public $numeros;
	public $quantidade;
	public $funcao;
	public $num = Array();
	public $menornum = 0;


	function __construct(){


	}

	public function numerosEFuncoes($quantidade) {
		$this->quantidade = $quantidade;
		$num = array();
		echo "Os numeros gerados aleatoriamente foram ";
		for ($i=1; $i <= $quantidade; $i++) { 
			$num[$i] = rand(0, 100);
			if ($i < $quantidade){
				echo "$num[$i] | ";
			} else {
				echo "$num[$i].";
			}
		}

		echo "<br /><br />";

		/* verifica o menor numero da Array */		
		echo "O menor numero e o:  " . min($num);

		echo "<br /><br />";

		/*verifica o maior numero da Array */
		echo "O manior numero e o: " . max($num);

		echo "<br /><br />";

		// o numero de itens escolhidos foi 
		echo "A quantiadde de numeros escolhidos foi: " . max($num);

		echo "<br /><br />";

		//valor medio dos numeros
		$media = array_sum($num) / $quantidade;
		echo "O valor medio dos numeros escolhidos e: "	. $media;	
				
	}

}



?>