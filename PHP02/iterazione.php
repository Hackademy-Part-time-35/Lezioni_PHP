<?php

//FOR 

//for( 1; 2; 3){

//}

/*
1. è uno slot in cui si può definire e inizializzare la variabile su cui verrà ciclato e verificata la condizione

2. è dove andremo a inserire la condizione per l'esecuzione del codice

3. è dove andiamo a inserire l'incremento della variabile da iterare
*/

$somma = 'I numeri:';

for($i=2;$i<99;$i++){
    $somma .= $i;
}

// var_dump($somma);
// operatori di incremento e decremento

$i++;

$i--;

/*
+=
-=
/=
*=
.=


*/

//? while   esegue il codice tra {} fiinchè la condizione non diventa falsa
// $i = 30;

// while($i>= 1){

//     echo " Il numero $i è positivo";

//     $i--;
// }

$login = false;

// while(false){

//     $password= readline("Inserisci la tua password:");
//     if($password == '1234'){
//         $login = true;
//     }
// }

//? do while   esegue almeno una volta il codice presente nelle graffe, dopo di che si comporta come un while normale

// $login = false;

// do{
//    echo "Sono il do";
// }while($login);


//? foreach è un ciclo che viene eseguito una volta per ogni elemento presente all'interno di un array o un oggetto iterabile 

$arrayDaCiclare = ['I','giocatori','hanno','vinto','la','partita'];
$frase = '';

foreach($arrayDaCiclare as $parola){
   $frase .= $parola.' ';
}



// Esercizio ho un array di persone e voglio stampare delle frasi di presentazione

$array = [
    ['nome'=>'Luca','cognome'=>'Bianchi','status'=>'felice'],
    ['prova'=>'Laura','albero'=>'Rossi','status'=>'triste'],
    ['libro'=>'Divina commedia'],
    ['nome'=>'Enrico','cognome'=>'Blu','status'=>'felice'],
];

$i=0;

$array = [[1],[32],['53'],[34 =>'prova', 0=>232]];

// foreach($array as $persona){
//     foreach($persona as $chiave => $valore){
//         echo $chiave .': '. $valore ."\n"; 
//     }
//     echo "Ciclo esterno ". ++$i ."\n";
// }


$arrayLibri =[ ['titolo'=>'Signore degli Anelli', 'anno'=>1990],
['titolo'=>'HarryPotter', 'anno'=>2010],
['titolo'=>'Toy Story', 'anno'=>1802],
['titolo'=>'Eragon', 'anno'=>1960],
['titolo'=>'Linus', 'anno'=>2020]
];

$secolo = [21=>[],20=>[],19=>[]];

foreach($arrayLibri as $libro){
    if($libro['anno']<= 2100 && $libro['anno']> 2000){
        $secolo[21][] = $libro['titolo'];
    }elseif($libro['anno']<= 2000 && $libro['anno']> 1900){
        $secolo[20][] = $libro['titolo'];
    }
    else{
        $secolo[19][] = $libro['titolo'];
    }
}


// $array[] = qualcosa inserisce l'elemento al primo indice dopo il piu grande indice numerico presente nell'array

$array1[] = 54;
$array1['pluto'] = 'Ciao';
$array1[] = 43;

var_dump($secolo);