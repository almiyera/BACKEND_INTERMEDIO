<?php
include 'mayorymenor.html';
//variables y constantes
$edad = null;
const numero_edad = 18; const cero = 0;
if (!empty ($_POST ['edad'])) {
$edad = $_POST ['edad'];

//condicionales para determinar mayoría de edad 
if ($edad >= numero_edad) {
echo '<h2>Usted tiene '. $edad . ' años, por consiguiente es mayor de edad.</h2>';
}elseif ($edad <= cero) {
echo "el valor ingresado no es valido";
}else {
echo '<h3>Usted tiene ' . $edad . ' años, por consiguiente es menor de edad.</h3>';
}
}else {
echo "Ingrese edad válida";
}
?>


