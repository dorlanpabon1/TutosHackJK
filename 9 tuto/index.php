<?php
//variables
$nombre = 'juan';
$nacional = 'colombia1';
$edad = 18;
	// test de nombre y nacionalidad
	if ($nombre == "juan" && $nacional == 'colombia'){
		echo "hola $nombre </br>";
		//test de edad
			if ($edad <18){
				echo "solo para mayores de 18";
			}
	}else{
		echo '<p>¿como te llamas? <input type="text" name="input"/></p>';
		echo '<p>¿que nacionalidad eres? <input type="text" name="input1"/></p>';
		echo '<p>¿cuantos años tienes? <input type="text" name="input2"/></p>';
	}

	//comentario de solo una linea

	/*este comentario es de multilinea
	hola como estas*/
