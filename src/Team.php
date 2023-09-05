<?php

namespace Acme;

class Team
{
    private $name;
    private $nombreFans = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function getname()
    {
        return $this-> name;
    }

    public function getnombreFans()
    {
        return $this-> nombreFans;
    }


}


?>