<?php 

class Fruit {
    public $name;
    public $color;
    public $shape;

    public function getName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;
    }
    public function getInfo(){
        return "Nama buah : ". $this->name . "<br> Warna buah : ". $this->color. "<br> Bentuk buah : ". $this->shape;
    }
}


$fruit1 = new Fruit();
$fruit1->name = "Apel";
$fruit1->color = "Merah";
$fruit1->shape = "Bulat";

$fruit2 = new Fruit();
$fruit2->name = "Pisang";
$fruit2->color = "Kuning";
$fruit2->shape = "Lonjong";

echo $fruit1->getInfo();
echo "<hr>";

echo $fruit2->getInfo();
