<html>
<head></head>

<body>

<h1>Ejercicios Iniciales PHP</h1>
<h2>Manuel Antonio Reino Diez</h2>

<?php

$nombre="Manuel Antonio";
$apellido1="Reino";
$apellido2="Diez";
$num1=8;
$num2=4;

echo "<h3>Ejercicio 1</h3>";
echo "Hola Mundo </br>";

echo "<h3>Ejercicio 2</h3>";
echo "Hola $nombre $apellido1 $apellido2" . "</br>";

echo "<h3>Ejercicio 3</h3>";

function resta(){
	$a=3;
	$b=2;
	$resta=$a-$b;
	echo "La resta es $resta ";
}

function multiplicacion($a,$b){
	return ($a*$b);
}

echo "La suma es " . 2+3 . "</br>";
echo resta() . "</br>";
echo "La multiplicación es " . multiplicacion(3,2) . "</br>"; 
include "recursos/division.php";
echo "</br>";
include "recursos/modulo.php";
echo "</br>";

echo "<h3>Ejercicio 4</h3>";

$bruto=2750;
$impuesto=22;

function impuesto_euros($a,$b){
	return ($a/100)*$b;
}

echo "<i>El sueldo bruto inicial es $bruto" . "€" . "</i></br>";
echo "<b>El porcentaje aplicado es del $impuesto" . "%" . "</b></br>";
echo "El impuesto aplicado en € es de " . impuesto_euros($bruto,$impuesto) . "€" . "</br>";
echo "<h4><u>El sueldo neto es de " . $bruto-(impuesto_euros($bruto,$impuesto)) . "€</u></h4>";

echo "<h3>Ejercicio 5</h3>";
$num1=3;
$num2=2;

echo "Nuestro primer numero es el $num1" . "</br>";
echo "Nuestro segundo numero es el $num2" . "</br>";

if ($num1>$num2){
    echo "El número <u>".$num1."</u> es mayor que el número <u>".$num2."</u>";
}
elseif ($num1==$num2){
    echo "El número <u>".$num1."</u> es igual al número <u>".$num2."</u>";
}
else{
    echo "El número <u>".$num1."</u> es menor que el número <u>".$num2."</u>";
}

echo "<h3>Ejercicio 6</h3>";

$numero=16;
if((is_integer($numero)) and ($numero>0)){
	if($numero%2==0)
		echo ("El numero $numero es par");
	else
		echo ("El numero $numero es impar");
}
else
	echo ("El numero no es entero");

echo "<h3>Ejercicio 7</h3>";

$aleatorio= RAND(1,100);
echo $aleatorio . "</br>";

if ($aleatorio <50){
	echo "El numero aleatorio generado es menor que 50";
}
elseif ($aleatorio >50){
	echo "El numero aleatorio generado es mayor que 50";
}
elseif ($aleatorio ==50){
	echo "El numero aleatorio generado es igual a 50";
}

echo "<h3>Ejercicio 8</h3>";

echo"Introduce una posicion (Arriba o abajo)";

?>

<form action="TodosLosEjerciciosIniciales.php" method="post">
 <input type="text" name="campo1" placeholders="Inserta un dato"/>
 <input type="submit" value="Enviar"/>
</form>

<?php

$posicion= (strtolower(!empty($_POST["campo1"])?$_POST["campo1"]:""));

switch($posicion){
	case "arriba":
		echo "La posición es arriba";
		break;
	case "abajo":
		echo "La posición es abajo";
		break;
	default:
		echo "La variable contiene un valor distinto de arriba o abajo";
		break;
}

echo "<h3>Ejercicio 9</h3>";

echo"Introduce un NUMERO DEL 1 AL 7, te dire a que dia de la semana corresponde.";

?>

<form action="TodosLosEjerciciosIniciales.php" method="post">
 <input type="number" name="campo2" placeholders="Inserta un numero"/>
 <input type="submit" value="Enviar"/>
</form>

<?php

$dia=(!empty($_POST["campo2"])?$_POST["campo2"]:"");

switch($dia){
	case 1:
		echo "Lunes";
		break;
	case 2:
		echo "Martes";
		break;
	case 3:
		echo "Miercoles";
		break;
	case 4:
		echo "Jueves";
		break;
	case 5:
		echo "Viernes";
		break;
	case 6:
		echo "Sabado";
		break;
	case 7:
		echo "Domingo";
		break;
	default:
		echo "No has introducido un numero del 1 al 7";
		break;
	
}

echo "<h3>Ejercicio 10</h3>";

$numero_anterior=0;
$numero_posterior= 1;
$serie=0;
$fin=10000;

echo "Serie de Fibonacci: ";
while($serie < $fin)
{
	/*Imprimimos la serie*/
	echo $serie . ", ";
	/*En serie guardamos la suma de las dos variables $numero_anterior + $numero_posterior;*/
	$serie = $numero_anterior + $numero_posterior;
	/*Ahora en numero anterios guardamos el numero posterior
	porque tal y como funciona la serie de fibonacci tenemos
	que sumar luego el numero posterior al resultado*/
	$numero_anterior = $numero_posterior;
	/*El numero posterior pasa a ser nuestro resultado del 
	calculo anterior, por eso almacenamos la variable $serie
	dentro de la de $numero_posterior*/
	$numero_posterior = $serie;
}

echo "<h3>Ejercicio 11</h3>";

$ejer11="Estamos dando nuestros primeros pasos en programación utilizando el lenguaje php";

//Longitud de la cadena
echo strlen($ejer11) . "</br>";

//La primera ocurrencia de "os" y la palabra de donde aparece por primera vaez
//la variante sin sensibilidad a mayusculas y minusculas es stripos
echo "La posición es " . strpos($ejer11, "os") . " y aparece por primera vez en la palabra " . "'" . substr($ejer11, 0, 7) . "'" . "</br>";

//Posición de la palabta
echo strrpos($ejer11, "nuestros") . "</br>";

//Sacar por pantalla desde donde empieza la palabra hasta el final del string
echo stristr($ejer11, "lenguaje") . "</br>";

//Sacar parte de una cadena 
echo substr($ejer11, 14, 23). "</br>";

//Remplazar palabras ireplace insenisble a mayusculas y minusculas
//str_replace sensible a mayusculas y minusculas
echo str_ireplace("estamos", "estoy", $ejer11) . "</br>";

//Remplazar dos palabras a la vez.
$antes=array("estamos", "nuestros");
$despues=array("estoy", "mis");
echo str_ireplace($antes, $despues, $ejer11) . "</br>";

//Convertir todas las letras a minusculas
echo strtolower($ejer11) . "</br>";

//Convertir todas las letras a MAYUSCULAS
echo strtoupper($ejer11) . "</br>";

//Convertir la primera letra de cada palabra a MAYUSCULAS
echo ucwords($ejer11). "</br>";

echo "<h3>Ejercicio 12</h3>";

$semana = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
//Imprimir la posición deseada del Array
echo $semana[2];

echo "<h3>Ejercicio 13</h3>";

$colores= array("azul","rojo","verde","rosa","naranja");

foreach($colores as $valor){
	echo $valor . " ";
}

echo "</br>";
echo "</br>";

echo "Vamos a borrar la palabra 'rosa' del array: </br>";

echo "</br>";
//Para borrar el valor rosa
if (in_array("rosa" , $colores)){
		foreach($colores as $indice=>$valor){
			/*strcm compara valores, en este caso lo que hay dentro
			de $valor lo comprara con rosa, funciona al reves esta 
			funciona es decir, cuando se cumple la condicion devuelve 
			0 en vez de 1*/
			if (strcmp($valor, "rosa")==0)
				/*unset elimina*/
				unset($colores[$indice]);
		}
}

foreach($colores as $valor){
	echo $valor . " ";
}

echo "</br>";
echo "</br>";

echo "<h3>Ejercicio 14</h3>";

//METODO 1
echo "<h5>METODO 1</h5>";

$valor=2;
for($i=1; $i<11; $i++){
	
	if($valor%2==0){
		$vector[$i]=$valor;
	}
	$valor+=2;
	echo "Elemento " . $i . " ----------> " . $vector[$i] . "</br>";
}

//METODO 2
echo "<h5>METODO 2</h5>";

$i=0;
while ($i<=20){
	$i++;
	if($i % 2) {
		continue;
	}
	echo $i . "</br>";
}

echo "<h3>Ejercicio 15</h3>";

$ejer15=array(1=>90, 30=>7, "e"=>99, "hola"=>43);

foreach($ejer15 as $indice=>$valor){
	echo "Indice $indice y valor $valor" . "</br>";
}

echo "</br>";
echo "</br>";

$ejer15_prueba_indices=array(26,38,1993,16,89,154,789);

foreach($ejer15_prueba_indices as $indice=>$valor){
	echo "Indice $indice y valor $valor" . "</br>";
}

echo "<h3>Ejercicio 16</h3>";

$array_de_bidimensional_a_unidimensional=array();
$array_impares=array();

/*filas*/
for($i=0;$i<3;$i++){
	echo "<br>";
    /*columnas*/
    for($j=0; $j<4; $j++){
        echo $bidi1[$i][$j]=rand(0,9);
		array_push($array_de_bidimensional_a_unidimensional, $bidi1[$i][$j]);
		//METODO 1 SACAR NUMEROS IMPARES, SE PUEDE HACER DENTRO O FUERA
		if($bidi1[$i][$j] %2!=0){
			array_push($array_impares, $bidi1[$i][$j]);
		}
    }
}

echo "<br><br>El valor maximo es " . max($array_de_bidimensional_a_unidimensional);
echo "<br>El valor minimo es " . min($array_de_bidimensional_a_unidimensional);
echo "<br>Los impares son: ";
foreach($array_impares as $i){
	echo "$i ";
}
echo "<br>";
$media_impares= (array_sum($array_impares)) / (count($array_impares));
echo "La media de los numeros impares es: $media_impares";
//METOTO 2 SACAR NUMEROS IMPARES
/*foreach($array_de_bidimensional_a_unidimensional as $i){
	if($i %2!=0){
		array_push($array_impares, $i);
		echo $i;
	}
}
*/
echo "<br>";

//Recorremos el array multidimensional
echo "Recorremos el array multidimensional en una sola linea: ";
foreach($bidi1 as $i){
	foreach($i as $j){
		echo $j;
	}
}

echo "<br>";

for($i=0; $i<4; $i++){
	for($j=0; $i<5; $i++){
		if($i==$j){
			echo $bidi1[$i][$j];
		}
	}
}



echo "<h3>Ejercicio 17</h3>";

$supermercado=array("Fruta"=>array("Pera", "Manzana", "Platano"), 
					"Verdura"=>array("Berenjena", "Calabacin"), 
					"Lacteos"=>array("Leche", "Yogur", "Queso", "Kefir"));

foreach ($supermercado as $indice=>$valor){
	echo "</br><b><u>$indice</u></b></br>";
	foreach ($valor as $indice_producto=>$nombre_producto) {
		echo "$nombre_producto </br>" ;
	}
}

echo "<h3>Ejercicio 18</h3>";

$aleatorio = rand(1,100);
echo "<u>$aleatorio</u> </br>
";

$num=0;
$suma=0;

while($num<$aleatorio){
	$num++;
	if($num % 2==1 or $num==$aleatorio) {
		continue;
	}
	echo $num . "</br>";
	$suma+=$num;
}

echo "</br>";
echo "la suma de todos los numeros pares anteriores al obtenido es: <b> $suma </b>";

echo "<h3>Ejercicio 19</h3>";

switch(rand(1,4)){
	case 1:
		echo "<img src='recursos/img/marea.jpg' style='width:414px; height:263px'>";
		break;
	case 2:
		echo "<img src='recursos/img/barricada.jpg' style='width:414px; height:263px'>";
		break;
	case 3:
		echo "<img src='recursos/img/extremo.jpg' style='width:414px; height:263px'>";
		break;
	case 4:
		echo "<img src='recursos/img/suaves.jpg' style='width:414px; height:263px'>";
		break;
}

echo "<h3>Ejercicio 20</h3>";

echo "<a href='recursos/ejercicio20.php'>Click aqui para ver el ejercicio</a> ";

/*

CODIGO DEL EJERCICIO 20. EL DE CREAR 2000 CUADRADOS ALEATORIOS POR LA PANTALLA EN POSICIONES ALEATORIAS
Y DE COLORES ALEATORIOS.

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
*/

echo "<h3>Ejercicio 21</h3>";

$agenda = array(array("Nombre"=>"Jorge",
						"Dirección"=>"Madrid",
						"Telefono"=>999999999,
						"Correo"=>"jorge@correo.com"),
				array("Nombre"=>"Julia",
						"Dirección"=>"Valencia",
						"Telefono"=>235456987,
						"Correo"=>"julia@gmail.com"),
				array("Nombre"=>"Lucas",
						"Dirección"=>"Orense",
						"Telefono"=>222222222,
						"Correo"=>"lucas@correo.com"),
				array("Nombre"=>"Susana",
						"Dirección"=>"Ávila",
						"Telefono"=>987546321,
						"Correo"=>"susana@gmail.com"),
				array("Nombre"=>"Martin",
						"Dirección"=>"Lugo",
						"Telefono"=>7539514456,
						"Correo"=>"martin@educa.madrid.org"),
				array("Nombre"=>"Laura",
						"Dirección"=>"Sevilla",
						"Telefono"=>444444444,
						"Correo"=>"laura@hotmail.com"),
);

?>

<!Doctype html>
<html>	
	<head>
		<meta charset="UTF-8"/>
		<title></title>
		<style>
			#a {
				background-color: #b4c7e7;
			}
			#b {
				background-color: #f8cbad;
			}
			table {
				border: 1;
				width: 400px;
			}
			td.r {
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php
			echo "<table border>
				  <thead>
					<th colspan='3'> &#36;agenda </th>
				  </thead>
				  <thead> 
					 <th id='a'> Clave </th>  
					 <th id='b'> Clave </th> 
					 <th> Contenido </th> 
				  </thead>";
			foreach($agenda as $indice => $datosContacto){
					echo "<tr>
							<td class= 'r' id='a' rowspan='4'>" . $indice . "</td>" 
						 ;
				foreach($datosContacto as $datos => $info){
					echo "<td id='b'>" . $datos . "</td>"; 
					echo "<td>" . $info . "</td>" ;
					echo "</tr>";
				}
			}			
			echo "</table>";
		?>
	</body>
</html>

<?php

//Vamos a hacer la función para que los correos '@correo.com' no sean validos
function correoValido($correo){
	$valido = array("@gmail.com","@educa.madrid.org","@hotmail.com", "@yahoo.com");
	$posicionArroba = strpos($correo, "@");
	$finCorreo = substr($correo, $posicionArroba);
	return in_array($finCorreo,$valido);
}

foreach ($agenda as $indice => $datosContacto){
	echo "<ul>";
	if(!correoValido($datosContacto["Correo"])){
		echo "<li>El correo de " . $datosContacto["Nombre"] . " no es valido";
	}
	echo "</ul>";
}

echo "<h3>Ejercicio 22</h3>";

$trabajador=array(  "CE0001"=>array("nombre"=>"Antonio Olarte", "edad"=>35, "salario"=>1800),
					"CE0002"=>array("nombre"=>"Manuel Reino", "edad"=>28, "salario"=>2600),	
					"CE0003"=>array("nombre"=>"Mireya López", "edad"=>27, "salario"=>800),	
					"CE0004"=>array("nombre"=>"Vicente Moraleda", "edad"=>55, "salario"=>650),	
					"CE0005"=>array("nombre"=>"Ramiro Méndez", "edad"=>58, "salario"=>1450),	
					"CE0006"=>array("nombre"=>"Kutxi Romero", "edad"=>22, "salario"=>1550),	
					"CE0007"=>array("nombre"=>"Carlos Marin", "edad"=>50, "salario"=>1210),	
					"CE0008"=>array("nombre"=>"Adrián Olaya", "edad"=>48, "salario"=>2500),	
					"CE0009"=>array("nombre"=>"Dolores Diez", "edad"=>21, "salario"=>880),	
					"CE0010"=>array("nombre"=>"Paola Reino", "edad"=>37, "salario"=>1689),	
					"CE0011"=>array("nombre"=>"Juan Romero", "edad"=>40, "salario"=>2900),	
					"CE0012"=>array("nombre"=>"Rosa Marin", "edad"=>32, "salario"=>3000),	
					"CE0013"=>array("nombre"=>"Manuel Castro", "edad"=>51, "salario"=>1450),	
					"CE0014"=>array("nombre"=>"Eduardo Olarte", "edad"=>30, "salario"=>290),	
					"CE0015"=>array("nombre"=>"Belen Herrada", "edad"=>19, "salario"=>1300),	
					"CE0016"=>array("nombre"=>"Diego Ugarte", "edad"=>23, "salario"=>930),	
					"CE0017"=>array("nombre"=>"Arancha Garcia", "edad"=>32, "salario"=>1750),	
					"CE0018"=>array("nombre"=>"Jorge Ruiz", "edad"=>25, "salario"=>1950),	
					"CE0019"=>array("nombre"=>"Cristina Lopez", "edad"=>49, "salario"=>1200),	
					"CE0020"=>array("nombre"=>"Paula Diez", "edad"=>22, "salario"=>1540),
);


function calcularSalario($nombre, $edad, &$salario){
	//Aqui nos guardamos el salario anterior por si acaso algo sale mal
	$salarioAnterior = $salario;

	if($salario>=1000 || $salario<=2000 ){
		if($edad>45){$salario*=1.04;}
		else{$salario*=1.10;}
	}

	elseif($salario<1000){
		if($edad<30){$salario=1500;}
		elseif($edad<=45) {$salario*=1.03;}
		else{$salario*=1.15;}
	}
}

echo "</br>";

echo "<table border>
				  <thead>
					<th colspan='3'> &#36;trabajador </th>
				  </thead>
				  <thead> 
					 <th id='a'> Clave </th>  
					 <th id='b'> Clave </th> 
					 <th> Contenido </th> 
				  </thead>";
			foreach($trabajador as $indice => $datosTrabajador){
					echo "<tr>
							<td class= 'r' id='a' rowspan='3'>" . $indice . "</td>"  ;
				foreach($datosTrabajador as $datos => $info){
					echo "<td id='b'>" . $datos . "</td>"; 
					echo "<td>" . $info . "</td>" ;
					echo "</tr>";
				}
			}			
			echo "</table>";

foreach($trabajador as $codigo =>&$info){
	calcularSalario($info['nombre'],$info['edad'],$info['salario']);	
}
echo "<br>";

var_dump($trabajador);

echo "</br>";
echo "</br>";

echo "<table border>
				  <thead>
					<th colspan='3'> trabajador </th>
				  </thead>
				  <thead> 
					 <th id='a'> Clave </th>  
					 <th id='b'> Clave </th> 
					 <th> Contenido </th> 
				  </thead>";
			foreach($trabajador as $indice => $datosTrabajador){
					echo "<tr>
							<td class= 'r' id='a' rowspan='3'>" . $indice . "</td>" 
						 ;
				foreach($datosTrabajador as $datos => &$info){
					echo "<td id='b'>" . $datos . "</td>"; 
					echo "<td>" . $info . "</td>" ;
					echo "</tr>";
				}
			}			
			echo "</table>";

echo "<h3>Ejercicio 23</h3>";

$arrayAleatorios = array();
$arrayRepetidos = array();

function arrayNumerosAleatorios($arr1, $arr2){
	$salida = 1;
	while ($salida <= 20) {
		$siguienteAleatorio = mt_rand(1, 30);
		if(in_array($siguienteAleatorio, $arr1)){
			array_push($arr2, $siguienteAleatorio);;
		}else{
		array_push($arr1, $siguienteAleatorio);
		$salida++;
		}
	}
	//Descendente
	arsort($arr1);
	arsort($arr2);
	//Ascendente
	//asort($arrayAleatorios);

	echo "<b><u>Numeros aleatorios del array principal</u></b><br><br>";
	foreach($arr1 as $i){
		if($i%2==0){
			echo "<span style='color:green'>" . $i . "</span><br>";}
		else{
			echo "<span style='color:red'>" . $i . "</span><br>";}
	}

	echo "<br><b><u>Numeros aleatorios repetidos</u></b><br><br>";

	foreach($arr2 as $i){
		echo $i . "<br>";
	}
}

arrayNumerosAleatorios($arrayAleatorios, $arrayRepetidos);

echo "<br>";

echo "<h3>Ejercicio 24</h3>";

$primeraDivision=array("Real Madrid"=>array("puntos"=>87, "posicion"=>1),
						"Barcelona"=>array("puntos"=>82, "posicion"=>2),
						"Atlético de Madrid"=>array("puntos"=>70, "posicion"=>3),
						"Sevilla"=>array("puntos"=>70, "posicion"=>4),
						"Villareal"=>array("puntos"=>60, "posicion"=>5),
						"Real Sociedad"=>array("puntos"=>56, "posicion"=>6),
						"Granada"=>array("puntos"=>56, "posicion"=>7),
						"Getafe"=>array("puntos"=>54, "posicion"=>8),
						"Valencia C.F."=>array("puntos"=>53, "posicion"=>9),
						"Osasuna"=>array("puntos"=>52, "posicion"=>10),
						"Athletic"=>array("puntos"=>51, "posicion"=>11),
						"Levante"=>array("puntos"=>49, "posicion"=>12),
						"Valladolid"=>array("puntos"=>42, "posicion"=>13),
						"Eibar"=>array("puntos"=>42, "posicion"=>14),
						"Betis"=>array("puntos"=>41, "posicion"=>15),
						"Alavés"=>array("puntos"=>39, "posicion"=>16),
						"Celta de Vigo"=>array("puntos"=>37, "posicion"=>17),
						"Leganés"=>array("puntos"=>36, "posicion"=>18),
						"R.C.D. Mallorca"=>array("puntos"=>33, "posicion"=>19),
						"RCD Espanyol"=>array("puntos"=>25, "posicion"=>20),
);

arsort($primeraDivision);

echo "<table border>
				  <thead>
					<th colspan='3'> LaLiga </th>
				  </thead>
				  <thead> 
					 <th id='a'> Clave </th>  
					 <th id='b'> Clave </th> 
					 <th> Contenido </th> 
				  </thead>";
			foreach($primeraDivision as $equipo => $estadisticasEquipo){
				if($estadisticasEquipo["posicion"]<=3){
					echo "<tr>
							<td class= 'r' id='a' rowspan='2'>" . $equipo . "</td>" 
						 ;}
				foreach($estadisticasEquipo as $datos => $info){
					
					if($estadisticasEquipo["posicion"]<=3){
						echo "<td id='b'>" . $datos . "</td>"; 
						echo "<td>" . $info . "</td>" ;
						echo "</tr>";
					}
				}
			}			
			echo "</table>";

?>

</body>

</html>