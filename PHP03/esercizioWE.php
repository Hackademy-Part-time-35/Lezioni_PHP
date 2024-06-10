<?php

// Dovrete scrivere una funzione che controlli una password
// La password dovrà contenere almeno un numero, una lettere maiuscola e essere di almeno 8 caratteri
// dovra avere un valore di ritorno booleano true solo se tutte le condizione sono verificate

function checkPassword($password){

    return checkUpper($password) && checkLength($password) && checkNumeric($password);



}

function checkUpper($stringa){
    
}

function checkNumeric($stringa){
    
}

function checkLength($stringa){

}