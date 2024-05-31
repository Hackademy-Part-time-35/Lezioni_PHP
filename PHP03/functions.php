<?php

//! Le funzioni: sono dei costrutti di codice "riutilizzabile"

//? Definizione

function presentati(){
    echo "Ciao mi chiamo Emanuele";
}

//? Chiamata di una funzione

// presentati();

//! In PHP le funzione non sono case sensitive

$a = 5;

$b =20;

$c = 302;

//?funzione parametrica

function somma($num1,$num2){ // $num1 è un parametro formale
   echo $num1 + $num2 ."\n";
}

// somma($a,$b);
// somma($a,$c);
// somma($b,$c);

$risultato = 0;

// le variabili in php possono avere due scope: locale e globale

// var_dump($risultato);

// echo sottrazione(20,42);

//? funzione con valore di ritorno
// il return interrompe immediatamente l'esecuzione della funzione

function sottrazione($num1,$num2){
    return $num1 - $num2;
}


$persona = ['name'=>'Paolo','surname'=>'Verdi','gender'=>'NF'];


//? type hinting

function checkMale(string $gender){
    if($gender == 'M'){
        return true;
    }else{
        return false;
    }

    echo "Fine funzione";
}


//? type hinting per valore di ritorno

function moltiplicazione(int $num1,int $num2) : int{
    
    return $num1*$num2;
}

//? passaggio per valore
// nel passaggio per valore all'interno della funzione ho un parametro col valore della variabile esterna

$a = 102;

function incrementa($valore){
    return ++$valore;
}


//? passaggio per riferimento
//nel passaggio per riferimento all'interno della funzione quando agisco sul parametro sto modificando direttamente il valore della variabile esterna

function decrementa(&$valore){
    $valore--;
}

decrementa($a);


//? parametro di default

function stampa($stringa, $modalita = false){
    if($modalita){
        echo $stringa;
    }
    else{
        echo $stringa. "\n";
    }
}

// stampa('Mi presento ciao');


//? funzione di callback

function applicaFunzione(callable $callback,array $arrayDiStringhe){

    foreach($arrayDiStringhe as $stringa){
        $callback($stringa);
    }
    

}

function stampaStringa($stringa){ //funzione di callback
    echo $stringa;
}

applicaFunzione('stampaStringa',['Stringa da stampare']);

//? funzioni anonime

$array = ['prova','21341','Albero'];

applicaFunzione(
    function($para){
        echo $para;
    }
,$array);

