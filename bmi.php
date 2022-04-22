<?php
class Bmi{
    var $nama, $berat, $tinggi;
    function __construct($nama, $berat, $tinggi)
    {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    function berat()
    {
        if ($this->berat < 18.5) {
            return $berat = 'kekurangan berat badan';
        } elseif($this->berat > 18.5 && $this->berat <= 24.9) {
            return $berat = 'Normal';
        } elseif($this->berat >= 25.0 && $this->berat <= 29.9) {
            return $berat = 'kelebihan berat badan';
        } elseif($this->berat >= 30.0) {
            return $berat = 'kegemukkan';
        }
    }
}
?>