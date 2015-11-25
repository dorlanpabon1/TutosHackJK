<!doctype <!DOCTYPE html>
<html>
<head>
	<title>ProgramaloTu</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<?php
   $var='Esto es php dentro de html';
?>
<p><?php echo $var; ?></p>
<?php $var1='rojo'; ?>
<?php  $var2='verde'; ?>
<p id="<?php echo $var1; ?>" > esto es html y css rojo</p>
<p id="<?php echo $var2; ?>" > esto es html y css verde</p>

</body>

</html>