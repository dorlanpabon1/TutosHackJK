<?php
$contador = 1;
$test =5;

echo 'bucle while <br><br>';

while($contador <= $test) {
echo $contador.'. hola mundo<br>';
$contador++;
}

echo '<br>--------------------<br>';
echo 'bucle do-while <br><br>';

do{
 echo '&iquest;es '.$contador.' mas peque&ntilde;o que '.$test.'?<br>';
}while ($contador <= $test)

?>