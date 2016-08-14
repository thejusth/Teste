<?php

function espelha_matriz($matriz){
	
	
	
	return $matriz;
}



$matriz = array();

$matriz[0][0] = 12;
$matriz[0][1] = 3;
$matriz[0][2] = -10;
$matriz[1][0] = 33;
$matriz[1][1] = 24;
$matriz[1][2] = 18;
$matriz[2][0] = 7;
$matriz[2][1] = 10;
$matriz[2][2] = 22;


$matrizr = espelha_matriz($matriz);

for ($i=0; $i <= 2; $i++){
	for($j=0; $j <= 2; $j++){
		if ($j==2){
		  echo $matriz[$i][$j]."| <br />";
		}
		else{
	      echo $matriz[$i][$j]."|";
		}
	}
}

//recursive_show_array($matriz);

//$result = bissexto(2011);

echo "<br /><br />";

$a array("a", "b", "c", "d");
$a[]="e";
echo $a;

echo "<br /><br />";

$i=1;

while(%i<=100){
	
}







