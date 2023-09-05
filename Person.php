<?php

class Person
{
    var $firstName ;
    var $LastName;
    var $age;
    private static $totalCont = 0;
    
    public function __construct($firstName,$LastName,$age)
    {
        $this->firstName = $firstName;
        $this->LastName = $LastName;
        $this->age = $age;
        static ::$totalCont ++; 
    }

    public static function gettotalCount()
    {
        return static::$totalCont;
    }

    public function fullName()
    {
        echo $this->firstName .' '.$this->LastName;
    }

    public function danser()
    {
        echo $this->LastName . ' est en train de danser.';
    }
} 

$mac = new Person('mac','carhel',28);
$tata = new Person('tata','yao',29);
$toto = new Person('toto','nono',20);

$nomCompletDemac = $mac->fullName();
// echo $nomCompletDemac . PHP_EOL;

echo Person::gettotalCount() . PHP_EOL;

echo $nomCompletDemac



?>

 


