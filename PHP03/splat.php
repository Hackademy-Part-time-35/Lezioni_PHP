<?php

//? splat operator ...


function sommaTotale(...$numeri){

    $totale=0;
    foreach($numeri as $numero){
        $totale+=$numero;
    }

    return $totale;
}

// sommaTotale(123,32,42,32);



$arr1 = [12,32,324,23];

$arr2 = [2938,412,5321,2];

$arrTot = [...$arr1,...$arr2];

// var_dump($arrTot);


echo sommaTotale(123,32,42,32,32);