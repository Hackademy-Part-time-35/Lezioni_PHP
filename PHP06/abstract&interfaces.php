<?php

// classe astratta non è istanziabile la utilizzo quando non voglio poter creare oggetti di quella classe

abstract class Person{
    public $name;
    public $surname;
    
    public function __construct($name,$surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public abstract function saluta();

}

class Teacher extends Person{

    public $materia;

    public function __construct($name,$surname,$materia)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->materia = $materia;
        echo "Sono il teacher";
    }

    public function saluta()
    {
        
    }
}


// $persona = new Person('Piero','Foscoo');



abstract class Bank{
    // public abstract function prelievo($quantita);

    // public abstract function deposito();
}


class Atm extends Bank{
    // il metodo con cui definisco il metodo astratto deve essere compatibile (nome, numer di parametri ecc)
    public function prelievo($a){

    }
}

class Filiale extends Bank{
    use Automatico;
}



trait Manuale{
    public function prelievo(){
        echo "Ecco un prelievo manuale";
    }
}


trait Automatico{
    public function prelievo(){
        echo "Ecco un prelievo automatico";
    }
}

// interfaccia 

interface InvioPosta{
  
    public function mandaMail();
    public function riceviMail();


}


class Posta{

    public $lettere = [];
    public function __construct($oggetto)
    {
        $oggetto->riceviMail();
    }

}

class Postman extends Bank implements InvioPosta{
    public function mandaMail()
    {
        
    }

    public function riceviMail()
    {
        echo "HO ricevuto la tua mail";
    }

    public function distribuisciMail(){
        echo "Sto distribuendo la mail";
    }
}

$postino = new Postman;

$posta = new Posta($postino);