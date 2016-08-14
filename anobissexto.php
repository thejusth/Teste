<?php

function bissexto($num){
	
	$teste = $num % 400;
	
	if ($teste ==0)	{
		return "É bissexto";		
	}
	else	
	{
		$teste = $num % 4;
		$teste2 = $num % 100;
		if (($teste == 0)&&($teste2 != 0)){
			return "É bissexto";
		}
		else{
			return "Não é bissexto";
		}
			
		
	}
}

$result = bissexto(2011);

echo $result;

