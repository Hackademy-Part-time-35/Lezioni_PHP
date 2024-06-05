<?php

//modificatori di visibilita

class A{

    public $valore;
    // rende l'elemento visibile solo alla classe stessa e alle classi che eredita da questa
    protected $variabile = 1023;

    // è visibile solamente dentro la classe stessa
    private $test = 'Messaggio super segreto';

    protected function presentati(){
        echo "Ciao sono la classe A";
    }

    // metodo getter
    public function getTest(){
        echo $this->test;
    }

    // metodo setter
    public function setTest($value){
        $this->test = $value;
    }


}

class B extends A{

    public function stampa(){
        // $this->presentati();
    }

}

// il modificatore dovrebbe essere scelto per limitare il piu possibile l'accesso agli elementi dell'oggetto o della classe


// $oggettoA = new A;

// $oggettoA->getTest();

// $oggettoA->setTest('Messaggio modificato');


// $oggettoA->getTest();



// Esempio riassuntivo

class Animal{
    protected $age;
    protected $species;

    public function __construct($age,$species)
    {
        $this->age = $age;
        $this->species = $species;
        
    }

    public function presentati(){
        echo "Ciao sono un $this->species e ho $this->age anni\n";
        echo "Ciao sono un Animale";
    }

}


class Bird extends Animal{
    protected $volante;

    public function __construct($age,$species, $volante='posso volare')
    {
        $this->volante = $volante;
        parent::__construct($age,$species);
        
        
    }

    public function presentati()
    {
        echo "Ciao sono un $this->species e ho $this->age anni e $this->volante \n";
    }

}


class Rapace extends Bird{
    public function __construct()
    {
        parent::presentati();

        // parent::parent:: è sbagliato
    }

    // dichiare in una classe figlia un metodo giò presente nella classe padre va a sovrascrivere la definizione della funzione
    // (overriding dei metodi)
    public function presentati()
    {
        echo "Ciao sono un rapace";
    }
}

$bird =new Rapace(25,'fenicottero');

// $bird->presentati();