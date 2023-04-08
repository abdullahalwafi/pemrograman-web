<?php

class BMI
{
    public $tb, $bb, $bmi;


    public function __construct($bb, $tb)
    {
        $this->tb = $tb / 100;
        $this->bb = $bb;
    }

    public function hitungBMI()
    {
        $this->bmi = $this->bb  / ($this->tb * $this->tb);
        return $this->bmi;
    }

    public function statusBMI()
    {
        if ($this->bmi < 18.5) {
            return "Kekurangan berat badan";
        } elseif ($this->bmi >= 18.5 && $this->bmi <= 24.9) {
            return "Normal (ideal)";
        } elseif ($this->bmi >= 25 && $this->bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else {
            return "Kegemukan (Obesitas)";
        }
    }
}
