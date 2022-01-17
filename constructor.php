<?php

class Binatang
{ 
    public $nama;
    public $kelas;

    public function __construct($nama ="Cody",$jenis="POM")
    {
        $this->nama ="$nama";
        $this->jenis ="$jenis";
    }
    
    // public function __construct(public $nama ="Cody",public $jenis="POM")
    // {}

    public function display():void
    {
        echo "nama :" .$this->nama . "<br>";
        echo "jenis :" .$this->jenis;
    }
} 


$binatang1 = new binatang("Black", "Herder");

echo $binatang1->display();