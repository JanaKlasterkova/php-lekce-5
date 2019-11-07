<?php

class Ctverec
{
    public $delkaStran;


    public function __construct($delkaStran)
    {
        $this->delkaStran = $delkaStran;
    }
    public function spocitejObsah()
    {
     return $this->delkaStran*$this->delkaStran;
    }

}
$mujCtverec = new Ctverec (6);
echo 'Obsah čtverce o délce strany ' . $mujCtverec->delkaStran . ' je ' . $mujCtverec->spocitejObsah();
