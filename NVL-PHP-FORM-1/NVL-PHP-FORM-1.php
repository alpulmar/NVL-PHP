<?php

<form action="/NVL-PHP/NVL-PHP-FORM-1/NVL-PHP-FORM-1.php" method="GET">
<fieldset>
    <legend>correo</legend>
    <label for="email">Email:</label>
    <input type="email" name="email">
</fieldset>
<fieldset>
    <legend>contraseña</legend>
    <label for="password">Contraseña:</label>
    <input type="password" name="contraseña" minlength="8">
</fieldset>
<fieldset>
    <legend>repetir contraseña</legend>
    <label for="password">Confirmar contraseña:</label>
    <input type="password" name="confirmar contraseña" minlength="8">
</fieldset>
<input type="submit" value="Enviar">
</form>

$usuario = $_GET["email"]
$contraseña = $_GET["contraseña"]
$confirmacion = $_GET["confirmar contraseña"]

if ($contraseña & $confirmacion >= 8) {
    echo "Datos procesados correctamente";
}else{
    echo "Error en el formulario";
}

?>