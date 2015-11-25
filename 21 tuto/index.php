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

 	for($i =0; $i < $arraySize; $i++){
 		echo $coches[$i].'<br>';

 	}
	

?>