<?php

class EventWedding{
    public static $guestCount =0;
    public const NOME_SPOSI = 'Maria e Peppuzzo';
    public static $guestList = [];
}

class Invite{

    public $guestName;
    public $guestGender;
    public $numberOfPlusOnes;
    
    public function __construct($guestName,$guestGender,$numberOfPlusOnes = 1)
    {
        $this->guestName = $guestName;
        $this->guestGender = $guestGender;
        $this->numberOfPlusOnes = $numberOfPlusOnes;
        $this->DisplayMessage();
        $this->Answer();
    }

    public function DisplayMessage(){
        if($this->guestGender == 'M'){
            echo "Ciao $this->guestName sei invitato al mio matrimonio, puoi portare $this->numberOfPlusOnes persone con te \n";
        }
        else{
            echo "Ciao $this->guestName sei invitata al mio matrimonio, puoi portare $this->numberOfPlusOnes persone con te \n";
        }
    }

    public function Answer(){
        
        if(readline("Verrai al mio matrimonio, rispondi \"SI\" per confermare \n")=='SI'){
            echo "Sono molto contento";
            EventWedding::$guestCount++;
        }else{
            echo "Mi dispiace\n";
        }
    }



}

$event = new EventWedding;

$invite = new Invite('Persona','M');



echo EventWedding::$guestCount;