<?php

// funzioni builtin sono diverse da funzioni user defined?


//? Varie Utili

// $a = readline('Scrivi qualcosa'); // permette di far inserire un input all'utente

//print_r();
//var_dump();
//rand(0,100);
//is_bool();
//! is_numeric();
//is_null();
//gettype([32]);
//unset();


//? Stringhe

//! strlen(); 
// var_dump(strlen('stringa')); // restituisce la lunghezza di una stringa


// strpos('Il mondo è bello','bel'); // trova una sottostringa all'interno di una stringa

//strrpos();

//! ctype_upper(); 

// var_dump(ctype_upper('A')); // controlla che tutto il contenuto della stringa sia maiuscolo, in tal caso refstituisce true altrimenti false

// strtolower('AjAjdsiISIJRSkasdksa');

// strtoupper();

// strrev('Ciao');

//str_replace('gatto','cane','Il mio gatto dorme sempre');

// var_dump(explode(' ','Il mio gatto dorme sempre')); // esplode una stringa in sottoelementi distanziati dal separatore e li metto in un array


//? Array

$array = ['prova'=>'1',342,23,432, 59=>20];

// array_keys($array);

//  array_push($array,'Sono stato inserito',342,42,42); // inserisce alla fine di un array un numero di elementi


//  array_shift($array); // elimina primo elemento array
 
// array_unshift($array,2); // inserisce un elemento all'inizio di un array


// array_pop(); //elimina ultimo elemento di un array

$array = [32,'parola',123];

// array_map(); // applica funzione di callback a tutti gli elementi di un array

// in_array(42,$array));

//implode(' ',$array); //unisce un array in una stringa separata da un separatore


