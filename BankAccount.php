<?php
    class BankAccount
    {
        public $accountNumber;
        private $Balance = 0;
        

        public function __construct( $accountNumber)
        {
            $this->accountNumber = $accountNumber;
        }

        public function setBalance($Balance)
        {
            if($Balance<10000)
            {throw new Exception("La somme est insuffisante");}
            
            $this->Balance = $Balance;


        }
        
        public function getBalance()
        {
            return $this->Balance * 100;
        }
        


    }

    $compteBancaireDeMac = new BankAccount("9999988888898");
    
    $compteBancaireDeMac->setBalance(15000);
    var_dump($compteBancaireDeMac->getBalance());
   

    
?>