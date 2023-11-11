<?php

include 'edad_exacta.html';

$edad = 0;
const constante_18 = 18; define ("constante0","0");

if (isset($_POST['verificar'])) 
    $f_n = new DateTime($_POST['f_n']);
   
    $date2 = new DateTime(date("y-m-d"));
    $diff = $f_n->diff($date2);

    $edad_actual = $diff->y;
    $edad_meses = $diff->m;
    $edad_dias = $diff->d;

        if ($edad_actual >= constante_18){
        echo "Tu edad es de " . $edad_actual . " años, por lo tanto eres mayor de edad,";
        }
        else if ($edad_actual < constante_18 && $edad_actual > constante0) {
        echo "<h4>Tu edad es de " . $edad_actual . " años, por lo tanto eres menor de edad.<h4>";
        } 

       {         
            echo "  Años: ".$edad_actual.", Meses: ".$edad_meses.", Dias: ".$edad_dias;
                        }             

?>