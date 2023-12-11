<?php

   

    $A = $_POST['txtMedida_da_area_a_pintar'];

 

    $Litros = $A*1/3;

 

 

    $Lata = ceil($Litros/18);

 

    $Valor= $Lata*80;

 

    echo "Serão necessários $Lata latas que terá o valor de R$$Valor";

   

   

?>