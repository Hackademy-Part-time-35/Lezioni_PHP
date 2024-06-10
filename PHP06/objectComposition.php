<?php


class GuerrieroConMazza extends Guerriero{

}

class GuerrieroConScudo extends Guerriero{


}

class GuerrieroConScudoTondo extends GuerrieroConScudo{

}


class GuerrieroConScudoQuadrato extends GuerrieroConScudo{


}

class Guerriero{
    public $vita = 20;

}


class Combattente extends Guerriero{

    public $armaDx;
    public $armaSx;
    // public $armatura;
    

    public function __construct(Arma $armaDx, Arma $armaSx)
    {
        $this->armaDx = $armaDx;
        $this->armaSx = $armaSx;
        // $this->armatura = $armatura;
    }

    public function attack(Guerriero $bersaglio, bool $dueMani = false){
        $this->armaDx->attack($bersaglio);
        if($dueMani){
            $this->armaSx->attack($bersaglio);
        }
    }

}

// dependency injection è una metodologia per cui passo a un oggetto delle "dipendenze"

abstract class Arma{

    public $weaponName;
    public $damage;

    public abstract function attack(Guerriero $bersaglio);

}

class Sword extends Arma{

    public $damage = 5;
    public function attack(Guerriero $bersaglio)
    {
        echo "Sto attaccando il bersaglio con la spada";
        $bersaglio->vita -= $this->damage;
    }

}

class Bow extends Arma{
    public $damage = 10;
    public function attack(Guerriero $bersaglio)
    {
        echo "Sto attaccando il bersaglio con l'arco'";
        $bersaglio->vita -= $this->damage;
    }
}


$combattente = new Combattente(new Bow,new Sword);

$combattente2 = new Combattente(new Sword,new Bow);


$combattente->attack($combattente2,true);

var_dump($combattente2);

