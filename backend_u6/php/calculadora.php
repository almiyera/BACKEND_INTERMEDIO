  
<?php

include  'calc10.html';

    $n1 =  $n2 = $tipo = $result = 0;
    
    if (isset($_POST['operar'])) 
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $tipo = $_POST['tipo'];

        switch ($tipo) {
            case 'suma':
                $result = $n1 + $n2;
                break;
            case 'resta':
                $result = $n1 - $n2;
                break;
            case 'multiplicacion':
                $result = $n1 * $n2;
                break;
            case 'division':
                if ($n2!=0){
                $result = $n1 / $n2;
            } else  {
            echo "<h4>No es posible la división entre 0.</h4>"; 
                break;
        }

        echo "<h1>".$result."</h1>";
        }

    {
        echo "El resultado de la operación $tipo es $result";

    }

    ?>

