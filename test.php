<?php
class A
{
     public function toto()
     {
        echo "je suis la methode toto appelee depuis la classe A";
     }
}


class B extends A
{
    public function tata()
    {
        parent::toto();
        echo"Je suis la methode tata appelee depuis la classe B";

    }

}
(new B)->tata();