<?php

function checkPassword(string $password){

    return checkNumeric($password) && checkMaiusc($password) && checkLength($password);

}

function checkNumeric($stringa){
    for($i=0;$i<strlen($stringa);$i++){
        if(is_numeric($stringa[$i])){
            return true;
        }
    }
    echo "La password deve contenere almeno un numero";
    return false;
}

function checkMaiusc($stringa){
    for($i=0;$i<strlen($stringa);$i++){
        if(ctype_upper($stringa[$i])){
            return true;
        }
    }
    echo "La password deve avere almeno un carattere Maiuscolo";
    return false;
}

function checkLength($stringa){
    if(strlen($stringa)>=8){
        return true;
    }
    echo "La password deve avere almeno 8 caratteri";
    return false;
}

$password='';
$flag = false;

// do{
//     $password= readline('Inserisci la tua password: ');
//     $flag = checkPassword($password);
// }while(!$flag);


function callbackFunction(){

    echo "Saluti dalla callback";

}


function principalFunction(callable $callback){
    $callback();
}

$funzione = function (){
    echo "Sono la funzione anonima";
};

principalFunction($funzione);

