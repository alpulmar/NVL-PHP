<?php
$descriptor = fopen("NVL-PHP/NVL-PHP-FICHEROS-2/el_quijote.txt","w");
fwrite($descriptor, "Sanchez");
$nuevo = fopen("NVL-PHP/NVL-PHP-FICHEROS-2/el_quijote_nuevo.txt", "x");
function remplazo(){
    str_replace($descriptor, $nuevo); 
}
remplazo();
fclose($nuevo);
?>