<?php

function palind($num){
	
	$inc = strlen($num);
	$num2 = "";
	
	
	while ($inc >=1){		
		
			$num2 = $num2 . substr($num, $inc-1, 1);		
			$inc--;
		
	}
	if ($num == $num2){
	  return "É palíndromo";
	}
	else{
		return "Não é palíndromo";
	}
		
		
}

$result = palind("1331");

echo $result;

