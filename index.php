<?php
	
	require('views/index.view.php');

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//Punto #1.
		$valor = $_POST['numero'];
		echo "Factorial de $valor es: ";
		function factorial($numero)
		{
			if($numero <= 1)
			{
				return 1;
			}
			else
			{
				return $numero * factorial($numero - 1);
			}
		}

		echo factorial($valor) . '<br>';
	}

	//Punto #3.
	echo "<br> <i><b>Punto 3:</b></i> <br>";
	$vector = array(0,1,2,3,4);
	$longitud = count($vector);
	$suma = 0;

	for($i = 0; $longitud > $i; $i++)
	{
		$suma += $vector[$i];
	}
	echo "La suma del vector es: $suma <br>";
	
	//Punto #4.
	echo "<br> <i><b>Punto 4:</b></i> <br>";
	$matriz = array(array(45, 4, 6, 7), array(23, 45, 67, 1), array(3, 4, 7, 9), array(5, 4, 3, 2), array(1, 2, 1, 4));

	foreach($matriz as $fila)
	{
		for($i = 0; 3 >= $i; $i++)
		{
			if($fila[$i] % 2 == 0)
			{
				$pares[] = $fila[$i];
			}
			else
			{
				$impares[] = $fila[$i];
			}
		}
	}

	echo "Vector con números pares: <br>";
	foreach($pares as $par)
	{
		echo $par . '<br>';
	}

	echo '<br>';

	echo "Vector con números impares: <br>";
	foreach($impares as $impar)
	{
		echo $impar . '<br>';
	}

?>