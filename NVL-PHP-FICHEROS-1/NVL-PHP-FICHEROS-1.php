<?php
$descriptor = fopen("NVL-PHP/NVL-PHP-FICHEROS-1/el_quijote.txt", "r");
while (($contenido = fgets($descriptor)) == "molino"){
    echo $contenido . "\n";
 }
?>