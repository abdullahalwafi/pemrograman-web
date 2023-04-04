<?php

// class Lingkaran {
//     public $jari_jari;
//     public const PHI = 3.14;

//     // Membuat method 
//     public function getLuas($r){
//         $this->jari_jari = $r;
//         return self::PHI * $this->jari_jari * $this->jari_jari;
//     }
//     public function getKeliling($r){
//         $this->jari_jari = $r;
//         return 2 * self::PHI * $this->jari_jari;
//     }
// }
class Lingkaran
{
    public $jari_jari;
    public const PHI = 3.14;

    // Membuat method 
    public function __construct($r)
    {
        $this->jari_jari = $r;
    }
    public function getLuas()
    {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }
    public function getKeliling()
    {
        return 2 * self::PHI * $this->jari_jari;
    }
}

$lingkaran1 = new Lingkaran(10);
echo "Luas lingkaran 1 = ". $lingkaran1->getLuas(). " cm<sup>2</sup>";
echo "<br>";
echo "Keliling lingkaran 1 = ". $lingkaran1->getKeliling(). " cm";
echo "<hr>";

$lingkaran2 = new Lingkaran(20);
echo "Luas lingkaran 2 = ". $lingkaran2->getLuas(). " cm<sup>2</sup>";
echo "<br>";
echo "Keliling lingkaran 2 = ". $lingkaran2->getKeliling(). " cm";
echo "<hr>";
?>