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
	$lista=array('usuario 1:' =>array('nombre' => "cristina", 'genero' => "femenino", 'profesion' => "estudiante"),
				'usuario 2:' =>Array('nombre' => "mario", 'genero' => "masculino", 'profesion' => "ingeniero"));
 	
 	foreach ($lista as $usuario => $info) {
 		echo '<strong>'.$usuario.'</strong><br>';
 		foreach ($info as $content) {
 			echo $content.'<br>';
 		}
 	}



	

?>