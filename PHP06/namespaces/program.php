<?php

namespace MyLibrary;


include 'a.php';

include 'b.php';

use Imagick\Edit\Image as ImagickImage;



// con lo \ davanti parte dal namespace standard, senza concatena il namespace specificato partendo da quello in cui mi trovo

$a = new ImagickImage;

$b = new \Image;

var_dump($a,$b);

//! per utilizzare una classe è necessario importarla all'interno del file
//! bisogna ricordarsi di importare la classe con il comando:
//! use namespace\nomeClasse;
//! se voglio rinominarla perchè ne ho due con lo stesso nome nel file
//! use namespace\nomeClasse as AltroNome;
