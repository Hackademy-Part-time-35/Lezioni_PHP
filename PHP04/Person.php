<?php

// Object Oriented Programming

// un paradigma di programmazione in cui il codice viene strutturato in classi e oggetti

// $persone = [
//     ['nome'=>'Piero','surname'=>'Rossi','email'=>'pieros@gmail.com','password'=>'password'],
//     ['nome'=>'Luca','surname'=>'Bianchi','email'=>'email@gmail.com','password'=>'ciao123']
// ];

//definire la classe
// in generale quando definisco una classe il nome dovrà essere al 
//singolare in inglese e con la prima lettera di ogni parola maiuscol

class Person{
    //Attributi o caratteristiche
    public $name;
    public $surname;
    public $age;
    public $height;

    //metodo costruttore

    public function __construct($name,$surname,$age,$height){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->height = $height;

        $this->SayHello();
    }

    //Metodi o comportamenti o azioni

    public function SayHello(){
        echo "Ciao sono $this->name ". $this->surname . ' e ho '. $this->age .' anni';
    }

}

// quando istanzio un oggetto viene chiamato automaticamente il metodo costruttore e per passare dati a questo metodo
// li inserisco dopo l'istanziamento dell'oggetto nelle parentesi tonde

// $persona1 = new Person('Giuliana','Binchi',32,174);

// $persona2 = new Person('Luca','Rossi','42',120);






// $db->AddPerson($persona1);

