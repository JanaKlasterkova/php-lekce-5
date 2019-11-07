<?php
class Uzivatel
{
    public $jmeno;
    public $heslo;
    public function __construct($jmeno,$heslo)
    {
        $this->jmeno = $jmeno;
        $this->heslo = $heslo;
    }
    public function Overeni($jmeno,$heslo)
    {
        if ($this->jmeno==$jmeno && $this->heslo==$heslo) {
            return true;
        }
        else
            {
                return false;
            }
    }
    public function ziskejJmeno()
    {
        return $this->jmeno;
    }
}

class Prihlasovani
{
    private $prihlaseniUzivatele = ["josef,karel,marek"];
    public function __construct($prihlaseniUzivatele)
    {
        $this->prihlaseniUzivatele[] = $prihlaseniUzivatele;


    }

    public function prihlas(Uzivatel $Uzivatel, $jmeno, $heslo)
    {
        if  ($Uzivatel->Overeni($jmeno,$heslo)==true)
        {
            $this->prihlaseniUzivatele= $prihlaseniUzivatele;
        }
}
    public function zobrazPrihlaseneUzivatele ()
    {
        foreach ($this->prihlaseniUzivatele as $uzivatel) {
            echo "Prihlaseni uzivatele: " . $uzivatel;
        }
    }
}

$Uzivatel= new Uzivatel ("Josef","josef1234");
$Prihlasovani = new Prihlasovani ("josef");
$Prihlasovani->zobrazPrihlaseneUzivatele() ;
