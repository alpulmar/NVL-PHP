<?php
function cuentaLetras($palabra = "amapola", $otraLtra = "s") {
    echo print_r(implode("-", $palabra+$otraLetra));
}
cuentaLetras();
?>