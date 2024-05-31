<?php

//Traccia 1

// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” 
// o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

// $users = [['name'=>'Paolo','surname'=>'Bianchi','gender'=>'M'],
// ['name'=>'Francesca','surname'=>'Rossi','gender'=>'F'],
// ['name'=>'Hugh','surname'=>'Neutro','gender'=>'NB']];

// foreach($users as $user){
//     if($user['gender']=='M'){
//         echo "Buongiorno Sig. ".$user['name'].' '.$user['surname']."\n";
//     }
//     elseif($user['gender']=='F'){
//         echo "Buongiorno Signora. ".$user['name'].' '.$user['surname']."\n";
//     }
//     else{
//         echo "Buongiorno ".$user['name'].' '.$user['surname']."\n";
//     }


// }


//Traccia 2

//Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// $numeri = [1,32,543,21,32,54,23];

// $sommaPari = 0;
// $contoNPari = 0;

// foreach($numeri as $numero){
//     if($numero % 2 == 0){
//         $sommaPari += $numero;
//         $contoNPari++;
//     }
// }

// echo $sommaPari/$contoNPari;


// Traccia 3

// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; 
// se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".