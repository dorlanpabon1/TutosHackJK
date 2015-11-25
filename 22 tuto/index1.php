<?php

	/*
	
	usuario:
		nombre
		genero
		profesion
	usuario:
		nombre
		genero
		profesion
		.
		.
		.
	
	*/

		//lista de personas
	$lista=array(array('nombre' => "cristina", 'genero' => "femenino", 'profesion' => "estudiante"),Array('nombre' => "mario", 'genero' => "masculino", 'profesion' => "ingeniero"));
 	$coches =array("audi","bmw","ford","kia","mercedes");
 	$arraySize= sizeof($coches);

 	echo 'esto es un bucle for<br>';

 	for($i =0; $i < $arraySize; $i++){
 		echo $coches[$i].'<br>';

 	}
 	echo '<br><br>';

 	echo ' esto es un bucle foreach<br>';
 		foreach ($coches as $marcas) {
 			echo $marcas.'<br>';
 		}

	

?>