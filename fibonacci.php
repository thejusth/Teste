<?php

function fibo($num){
	if (($num <= 3) && ($num > 0)){
		return 1;
	}
	else 
	if ($num == 1)	{
		return 0;
	}
	else{
		return fibo($num-1)+fibo($num - 2);
	}	
	
}

$result = fibo(11);

echo $result;
