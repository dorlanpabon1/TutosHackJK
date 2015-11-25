<?php
	$mes = 'julio';

switch ($mes) {
	case 'julio':
	case 'agosto':
		echo 'en este mes tienes vacaciones';
	break;
	case 'abril':
	 	echo 'este mes podrias tener vacaciones de pascuas';
	break;
	default:
	 	echo 'este mes te toca trabajar';
	break;
}
?>