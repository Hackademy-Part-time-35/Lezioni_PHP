<?php

$num1 = 27;
$num2 = 12;

//? operatori matematici

// somma +
// sottrazione -
// moltiplicazione *
// divisione /
// modulo %
// potenza **

$risultato = $num1 + $num2;

// var_dump($risultato);

//? type casting
// effettivamente il type casting è la conversione implicita di un dato in un altro tipo di dato a seconda della necessita

$dato = (bool)12.3;

// var_dump($dato);

//? Elementi truthy e falsy

$intero = (bool)0; // false
$intero = (bool)238; //true


$stringa = (bool)""; //false
$stringa = (bool)"stringa piena"; //true

$nullVariable = null; //false

$arrayVuoto = []; //false
$arrayPieno = ['']; //true

//? Operatori logici

// AND

true && true; //true
false && true; //false
true && false; //false
false && false; //false

// OR

true || true; // true
true || false; // true
false || true; //true
false || false; //false


// NOT 

!true; //false
!false; //true


$nome = '';
$cognome = 'Rossi';


//? Operatori di cofronto

$a =4;
$b =6;
$c ='4';

// maggiore >
//minore <
//uguale ==  è true se il valore è uguale, anche se il tipo è diverso
// forte uguaglianza ===  per essere true devono essere identici in valore e tipo
// disuguaglianza != restituisce true se cambia il valore tra i due argomenti
//forte disuguaglianza !==  restituisce true se cambia anche solo il tipo di un dato
// >=
// <=

// spaceship  <=>


// null coalescence operator ??


$nulla = 1;

var_dump($nulla ?? 'prova');