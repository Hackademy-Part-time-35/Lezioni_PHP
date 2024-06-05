<?php

class Cat{
    public function presentati(){
        echo "Sono il gatto";
    }
    public function salta(){
        echo "Sto saltando";
    }

}

class Bear{
    use Mangia;

    
}

class Man extends Cat{
    // use Mangia;

    public function presentati(){
        echo "Sono un uomo";
    }
    public function corri(){
        echo "Sto correndo";
    }

}

class Neandertal extends Man{
    use Mangia , Bevi;

    public function mangia(){
        echo "mangia sovrascritto";
    }

    
}

trait Mangia{
    public function mangia(){
        echo "Sto mangiando";
    }
}

trait Bevi{
    public function bevi(){
        echo "Sto bevendo";
    }
}

$uomo = new Neandertal;

