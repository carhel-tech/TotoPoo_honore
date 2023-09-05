<?php

class Policier extends Person
{
    public function fullName()
    {
        return $this->firstName .' '.$this->LastName.' Policier'; 
    }
}

?>