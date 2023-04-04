<?php

class Balok {
    public $panjang;
    public $lebar;
    public $tinggi;

    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }
    public function getLuas()
    {
        return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
    }
    public function getKeliling()
    {
        return 4 * ($this->panjang + $this->lebar + $this->tinggi);
    }
    public function getVolume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}

$balok1 = new Balok(5, 10, 15);
echo "Luas balok 1 = ". $balok1->getLuas(). " cm<sup>2</sup>";
echo "<br>";
echo "Keliling balok 1 = ". $balok1->getKeliling(). " cm";
echo "<br>";
echo "Volume balok 1 = ". $balok1->getVolume(). " cm<sup>3</sup>";
echo "<hr>";

$balok2 = new Balok(15, 15, 20);
echo "Luas balok 2 = ". $balok2->getLuas(). " cm<sup>2</sup>";
echo "<br>";
echo "Keliling balok 2 = ". $balok2->getKeliling(). " cm";
echo "<br>";
echo "Volume balok 2 = ". $balok2->getVolume(). " cm<sup>3</sup>";
echo "<hr>";