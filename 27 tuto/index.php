<?php
	$day= '12';
	$month= 'junio';
	$year = '2015';
	function displaydate(){
		global $day,$month,$year;
		return $day.'/'.$month.'/'.$year;
	}

	echo displaydate();
?>