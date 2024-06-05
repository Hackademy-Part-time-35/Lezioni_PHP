<?php

class Person{
    public $name;
    public $surname;

    //questo construct viene richiamato tramite parent::__construct() delle classi che ereditano direttamente da questa classe
    public function __construct($name,$surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}

//la parola chiave extends mi permette di ereditare metodi e attributi della classe genitore

//ereditarieta singola: ogni classe può ereditare solamente da una classe genitore

class Teacher extends Person{
    public $subjects = [];

    public function __construct($name,$surname,...$subjects)
    {
        // $this->name = $name;
        // $this->surname = $surname;
        
        parent::__construct($name,$surname);

        // foreach($subjects as $subject){
        //     $this->subjects[] = $subject;
        // }

        array_push($this->subjects,...$subjects);
    }


}

class Student extends Person{
    public $avg;

    public function __construct($name,$surname,$avg)
    {
        parent::__construct($name,$surname);
        $this->avg = $avg;
    }
}

class SubstituteTeacher extends Teacher{
    public $time = 4;

    public function __construct($name,$surname,$time,...$subjects)
    {

        parent::__construct($name,$surname,...$subjects);
        $this->time = $time;
    }
}


$array = ['storia','geografia','scienze'];

$docente = new Teacher('Piero','Rossi',...$array);

// $persona = new Person;
// $studente = new Student;

//DRY don't repeat yourself