<?php

// final keyword posso applicarla a una classe oppure ai singoli metodi di una classe

class Genitore{

    final public function saluta(){
        echo "Ciao!\n";
    }

}

class Figlio extends Genitore{

    // public function saluta(){
    //     echo "Ciao sono la classe figlia!\n";
    // }


    //non posso fare l'override del metodo perchè nel genitore era definito come final
}