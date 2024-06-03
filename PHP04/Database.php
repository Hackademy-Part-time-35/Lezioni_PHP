<?php

class Database{
    public $persons = [];

    public function AddPerson($person){
        array_push($this->persons,$person);
    }
}