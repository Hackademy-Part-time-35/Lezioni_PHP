<?php

// PHP è un linguaggio case senstive per le variabili



$parola ="mela";
$Parola = "pera";

$stringa = "Ciao mi chiamo \"Marco\" $parola";
$stringaApiceSingolo = $stringa .'L\'albero';

$stringa = 'Ciao mi chiamo "Marco" $parola';

$name = "Laura";

echo 'Ciao '. $name . $parola; 

//var_dump($stringaApiceSingolo . ' è fiorito');





// echo è una funzione che stampa a terminale l'argomento
// echo $parola;

// var_dump($parola); stampa a terminale informazioni come tipo, lughezza e contenuto di variabili o oggetti che gli passo come argomento
// print_r($parola);