<?php
// komentar
/*
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel consectetur, officia sed quas delectus aliquam voluptatem pariatur in sit eos, minima perspiciatis fuga est rerum sint molestiae, illo error quisquam!
    */
/*

echo "<h1>Belajar PHP</h1>";
echo "Hello World <br>";
print_r("Hello World  <br>");
var_dump("Hello World");
echo "<br><br>";

// variable user
$nama = "Abdullah Al Wafi";
$umur = 21;
$berat = 48.5;
$mahasiswa = true;

echo "nama saya $nama <br>";
echo "umur saya $umur tahun <br>";
echo "berat saya $berat kg <br>";
echo "mahasiswa $mahasiswa <br><br>";

// variable system
echo "dokumen root " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "nama file " . $_SERVER['PHP_SELF'] . "<br>";
echo "ip address " . $_SERVER['REMOTE_ADDR'] . "<br><br>";

// variable constanta
define('PHI', 3.14);
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo "luas lingkaran dengan jari jari = $jari =  $luas <br>";
echo "keliling lingkaran $keliling <br>";
*/

// array
$language = ["PHP", "Java", "Python", "C++", "C#"];
echo "Bahasa Pemrograman ke 3 = $language[0] <br>";
echo count($language) . "<br>";
$language[] = "Ruby";
unset($language[0]);
print_r($language);
echo "<br><br>";

echo "<ol>";
foreach($language as $lang){
    echo "<li> $lang </li>";
}
echo "</ol>";