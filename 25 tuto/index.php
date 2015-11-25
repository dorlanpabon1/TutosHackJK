<?php
	function person($name, $surname){
		echo $name.' '.$surname;
	}

	$personName= 'pedro';
	$pesonSurname= 'garcia';
	person($personName,$pesonSurname);
	echo '<br>';

	$personName = 'maria';
	$pesonSurname = 'lopez';

	person($personName,$pesonSurname);
?>