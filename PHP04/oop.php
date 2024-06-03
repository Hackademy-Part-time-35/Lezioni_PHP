<?php

class Book{
    // usare la keyword static permette all'attributo o al metodo di appartenere alla classe e non piu ai singoli oggetti
    public static $count = 0;

    public $title;
    public $year;
    public $length;
    public $price;
    //dichiarazione veloce e assegnazione attributi
    //  public function __construct(public $title,public $year,public $price = 123,public $length ='ND')
    public function __construct( $title, $year, $price = 123, $length ='ND')
    {
        //this indica l'oggetto stesso
        $this->title = $title;
        $this->year = $year;
        $this->length = $length;
        $this->price = $price;

        self::$count++ ;

    }

    //viene eseguito quando l'oggetto viene eliminato o quando termina il programma
    public function __destruct()
    {
        echo "$this->title: non ci sono piu \n";
    }

    public static function PrintCount(){
        echo self::$count;
        // nei metodi statici non posso utilizzare elementi dinamici
    }

}
//static 

Book::PrintCount();