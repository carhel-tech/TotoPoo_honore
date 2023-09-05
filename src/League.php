<?php

    namespace Acme;
    class League
    {
        private $name;
        private $teams;
    
        public function __construct($name)
        {
           $this->name = $name;
           $this->teams = []; 
        }
    
        public function addTeam($teams)
        {
            $this->teams[] = $teams;
    
        }
    
        public function getTeamCount()
        {
            return count($this->teams);
        }
    
    }


?>