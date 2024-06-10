<?php

class IronMan {

    // Armatura
    public $braccioDX;
    public $braccioSx;
    public $gambaDx;
    public $gambaSx;
    // public $elmo;
    // public $torso;

    // Pilota
    public $person;

    public function __construct(Braccia $brDX,Braccia $brSx,Gambe $gmDx,Gambe $gmSx,Persona $person)
    {
        $this->braccioDX = $brDX;
        $this->braccioSx = $brSx;
        $this->gambaDx = $gmDx;
        $this->gambaSx = $gmSx;
        $this->person = $person;


    }
}

abstract class Armatura{
    public $difesa;
    public $carica;

    public function __construct($difesa = 8,$carica = 100)
    {
        $this->difesa = $difesa;
        $this->carica = $carica;
    }

}

class Braccia extends Armatura{

    public $attacco = 0;

    public function sollevare(){
        echo "Sto sollevando qualcosa\n";
    }

    
}

class Gambe  extends Armatura{
    public $velocita;

    public function __construct($vel)
    {
        $this->velocita = $vel;
    }
    public function salta(){
        echo "Sto saltando \n";
    }
}


class Trapano extends Braccia{

    public function attacca(){
        echo "Sto trapanando il mio nemico\n";
    }

}

class Guanti extends Braccia{
    public function __construct($incremento)
    {
        $this->attacco += $incremento;
    }

    public function agguanta(){
        echo "Sto afferrando qualcosa\n";

    }
}

class Boosters extends Gambe{

    public function vola(){
        echo "Sto volando\n";
    }


}

class Persona{

}

$ironMan = new IronMan(new Guanti(10),new Guanti(15), new Boosters(20), new Boosters(20), new Persona);

$ironMan->person = new Persona;

print_r($ironMan);