<?php

interface TrojrozmernyObrazec
{
    public function ziskejObjem();

    public function ziskejPovrch();
}

class Kvadr implements TrojrozmernyObrazec
{
    public $a;
    public $b;
    public $c;

    public function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    public function ziskejObjem()
    {

        return $this->a*$this->b*$this->c;

    }
    public function ziskejPovrch()
    {
        return 2*($this->a*$this->b+$this->b*$this->c+$this->a*$this->c);
    }
}
class Krychle implements TrojrozmernyObrazec
{
    public $a;


    public function __construct($a)
    {
        $this->a=$a;

    }
    public function ziskejObjem()
    {

        return pow($this->a,3);

    }
    public function ziskejPovrch()
    {
        return 6*pow($this->a,2);
    }
}

class Jehlan implements TrojrozmernyObrazec
{
    public $a;
    public $v;

public function __construct($a,$v)
    {
        $this->a=$a;
        $this->v=$v;


    }
    public function ziskejObjem()
    {

        return 1/3*pow($this->a,2)*$this->v;

    }
    public function ziskejPovrch()
    {
        return pow($this->a,2)+2*(sqrt((pow($this->a,2))/4+pow($this->v,2))*$this->a);
    }
}
class Koule implements TrojrozmernyObrazec
{
    public $r;


    public function __construct($r)
    {
        $this->r=$r;

    }
    public function ziskejObjem()
    {

        return 4/3*pi()*pow($this->r,3);

    }
    public function ziskejPovrch()
    {
        return 4*pi()*pow($this->r,2);
    }
}

$Kvadr = new Kvadr(2, 3, 7);
echo "Kvadr má objem ";
echo $Kvadr->ziskejObjem();
echo "<br>";
echo "Kvadr má povrch ";
echo $Kvadr->ziskejPovrch();
echo "<br>";

$Krychle =new Krychle(5 );
echo "Krychle má objem ";
echo $Krychle->ziskejObjem();
echo "<br>";
echo "Krychle má povrch ";
echo $Krychle->ziskejPovrch();
echo "<br>";

$Koule =new koule(6 );
echo "Koule má objem ";
echo $Koule->ziskejObjem();
echo "<br>";
echo "Koule má povrch ";
echo $Koule->ziskejPovrch();
echo "<br>";

$Jehlan =new Jehlan(3,4 );
echo "Jehlan má objem ";
echo $Jehlan->ziskejObjem();
echo "<br>";
echo "Jehlan má povrch ";
echo $Jehlan->ziskejPovrch();
echo "<br>";