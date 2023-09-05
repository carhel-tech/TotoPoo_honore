<?php
require 'Forme.php';
require 'Carre.php';
require 'Triangle.php';
require 'Person.php';
require 'Policier.php';


echo (new Carre)->aire() . PHP_EOL;

echo(new Policier('mac','Meledje',28))->fullName();
?>