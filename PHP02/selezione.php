<?php


$a = 5;
$b=2;

//?IF  è un costrutto che permette di eseguire codice quando la condizione tra parentesi tonde ha valore booleano true
/*if($a>$b ){

    $b=5;
    var_dump($b);

}
*/

$persona = ['nome'=>'Giacomo','materia'=>'php','comprensione'=>'ottima'];

// voglio stampare una frase solo se la comprensione di giacomo è ottima

// if($persona['comprensione']=='ottima'){

//     echo "{$persona['nome']} ha capito bene {$persona['materia']}";

// }
// else{

//     echo "{$persona['nome']} non ha capito bene {$persona['materia']}";

// }


//?IF ELSE

/*if(condizione){
    //codice che viene eseguito se la condizione è vera
}
else{
    //codice che viene eseguito se la condizione è falsa
}
*/


//? IF ELSEIF ELSE

$eta = 80;

// if($eta >= 75){
//     echo "Sono vechhio";
// }
// elseif($eta>50){
//     echo "Sono di mezza eta";
// }

// elseif($eta<=50 && $eta >18){
//     echo "Probabilemente sto bene";
// }
// else{
//     echo "Sono minorenne";
// }


//!Non buono
// if($eta >= 75){
//     echo "Sono vechhio";
// }
// if($eta>50){
//     echo "Sono di mezza eta";
// }

// if($eta<=50 && $eta >18){
//     echo "Probabilemente sto bene";
// }
// else{
//     echo "Sono minorenne";
// }


//? SWITCH compara il valore del contenuto delle parentesi tonde con 
//?il valore dei diversi case e esegue il codice in caso i due corrispondano

$i = 60;

// switch($i){
//     case 1:
//         echo "Valgo 1\n";
//         break;
//     case 2:
//         echo "Valgo 2\n";
//         break;
//     default:
//         echo "Non corrisponde a nessun caso";
//         break;
// }

// echo "Fine codice";



// bingo se esce 23, tombola se esce 60

$estrazione = readline("Inserisci il numero vincente:");

switch($estrazione){

    case 23:
        echo "Bingo!";
        break;

    case 60:
        echo "Tombola!";
        break;
    default:
        echo "Ecco hai perso!";
}

if($estrazione == 23){
    echo "Bingo!";
}elseif($estrazione==60){
    echo "Tombola!";
}
else{
    echo "Ecco hai perso!";
}