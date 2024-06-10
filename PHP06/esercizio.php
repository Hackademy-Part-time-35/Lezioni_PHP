<?php
/* 

Traccia 1

Utilizza i principi di OOP ed Ereditarieta' per creare una struttura a classi come la seguente: 

+-|Continent  
+-----------|Country 
+--------------------|Region 
+---------------------------|Province 
+------------------------------------|City 
+------------------------------------------|Street
Ogni classe avra' un attributo public del tipo: 

$nameContinent: 
$nameCountry; 
$nameRegion; 
$nameProvince; 
$nameCity; 
$nameStreet; 

La prima classe genitore avra' la seguente struttura: 

class Continent { 
  public $nameContinent; 
  public function __construct($continent) { 
    $this->nameContinent = $continent; 
  }
}
Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo chiamato getMyCurrentLocation() che stampi a schermo la seguente frase: “Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“ 
*/

class Continent{
    public $nameContinent; 
    public function __construct($continent) { 
        $this->nameContinent = $continent; 
    }
}

class Country extends Continent{
    public $nameCountry; 
    public function __construct($continent,$country) { 
        parent::__construct($continent);
        $this->nameCountry = $country; 
    }
}

class Region extends Country{
    public $nameRegion; 
    public function __construct($continent,$country,$region) { 
        parent::__construct($continent,$country);
        $this->nameRegion = $region; 
    }
}

class Province extends Region{
    public $nameProvince; 
    public function __construct($continent,$country,$region,$province) { 
        parent::__construct($continent,$country,$region);
        $this->nameProvince = $province; 
    }
}

class City extends Province{
    public $nameCity; 
    public function __construct($continent,$country,$region,$province,$city) { 
        parent::__construct($continent,$country,$region,$province);
        $this->nameCity = $city; 
        // $this->getMyLocation();
    }

    public function getMyLocation(){
        echo "Mi trovo in $this->nameContinent, in $this->nameCountry $this->nameRegion $this->nameProvince $this->nameCity";
    }
}


$myLocation = new City('Europa','Italia','Piemonte','Torino','Torino');

// $myLocation->getMyLocation();

/*
Traccia 2

Crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole: 

-le classi non devono avere attributi;

- ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;

- non puoi realizzare metodi definiti public per stampare il risultato;

- l’unico metodo public ammesso e' il costrutture. Il risultato atteso sara':

$magikarp = new Fish();
//Nel terminale visaulizzerete:
Sono un animale Vertebrato
Sono un animale a Sangue Freddo
Splash!
*/

class Vertebrati {

    public function __construct()
    {
        $this->printVertebrato();
    }

    protected function printVertebrato(){
        echo "Ciao sono un vertebrato \n";
    }

}

class WarmBlooded extends Vertebrati{
    public function __construct()
    {
        parent::__construct();
        $this->printWarmBlooded();
    }

    protected function printWarmBlooded(){
        echo "Ciao sono un animale a sangue caldo \n";
    }
}

class ColdBlooded extends Vertebrati{
    public function __construct()
    {
        parent::__construct();
        $this->printColdBlooded();
    }

    protected function printColdBlooded(){
        echo "Ciao sono un animale a sangue freddo \n";
    }
}

class Magikarp extends ColdBlooded{
    public function __construct()
    {
        parent::__construct();
        $this->printKarp();
    }

    protected function printKarp(){
        echo "Ciao sono un Magikarp \n";
    }
}

class Bear extends WarmBlooded{
    public function __construct()
    {
        parent::__construct();
        $this->printBear();
    }

    protected function printBear(){
        echo "Ciao sono un orso \n";
    }
}


$karp = new Bear;