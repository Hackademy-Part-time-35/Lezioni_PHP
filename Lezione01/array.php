<?php 

// array in php sono 0 based

$array = ['Piero',54,6.53,false];

// array di array

$arrayMultidimensionale = ['Mela',20, ['Pera', false,true, $array ]];

// print_r($arrayMultidimensionale);


$arrayMultidimensionale[0] = 'Sono il nuovo valore';


// array associativi

$persona = ['nome'=>'Giada','cognome'=>'Tolve'];



$array = ['chiave'=> ['persona'=> $persona]];

print_r($array);
