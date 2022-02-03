<html>
<head></head>

<body>

<?php

$contador=0;

while($contador<=2000){

	$contador++;

	$color_aleatorioR=rand(0,255);
	$color_aleatorioG=rand(0,255);
	$color_aleatorioB=rand(0,255);

	$posicion_aleatoria_top=rand(0,100);
	$posicion_aleatoria_left=rand(0,100);

	$cuadrado="<div style='background-color:rgb($color_aleatorioR,$color_aleatorioG,$color_aleatorioB); 
	height:50px; width:50px; position:absolute; top:$posicion_aleatoria_top% ; left:$posicion_aleatoria_left%;'>&nbsp;</div>";
	echo $cuadrado;
}

?>

</body>

</html>