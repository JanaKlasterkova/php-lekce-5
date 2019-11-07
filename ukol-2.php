<?php

class GeometrickyUtvar
{
    private $pocetStran;

    public function __construct($pocetStran)
    {
        $this->pocetStran = $pocetStran;
    }

    public function ziskejPocetStran()
    {
        return $this->pocetStran;
    }
}
class Ctverec extends GeometrickyUtvar
{
  private $delkaStran;

    public function __construct($delkaStran)
    {
        $this->delkaStran = $delkaStran;
        parent::__construct(4);
    }
    public function ziskejObvod()
    {
    return $this->delkaStran*$this->ziskejPocetStran();
    }
}
class Trojuhelnik extends GeometrickyUtvar
{
    private $DelkaStranA;
    private $DelkaStranB;
    private $DelkaStranC;

    public function __construct($DelkaStranA,$DelkaStranB,$DelkaStranC)
    {
        $this->DelkaStranA = $DelkaStranA;
        $this->DelkaStranB = $DelkaStranB;
        $this->DelkaStranC = $DelkaStranC;
        parent::__construct(3);
    }
    public function ziskejObvod()
    {
    return $this->DelkaStranA+$this->DelkaStranB+$this->DelkaStranC;
    }
}




echo '<h3> Čtverec</h3>';
$Ctverec=new Ctverec (3);
echo 'Pocet stran: ' . $Ctverec->ziskejPocetStran() . '<br>'. 'Obvod: ' . $Ctverec->ziskejObvod();
echo '<h3> Trojúhelník</h3>';
$Trojuhelnik=new Trojuhelnik (2,4,5);
echo 'Pocet stran: ' . $Trojuhelnik->ziskejPocetStran() . '<br>'. 'Obvod: ' . $Trojuhelnik->ziskejObvod();


