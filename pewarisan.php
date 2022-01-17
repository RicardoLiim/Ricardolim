<?php

class togar
{
    public $nama;
    public $marga;

    public function __construct(string $marga ="siregar", string $nama ="togar")
    {
        $this->nama =$nama;
        $this->marga =$marga;
    }

    public function setNama(string $nama)
    {
        $this->nama =$nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function display():void
    {
        echo "nama : " .$this->getNama() . "<br>";
        echo "marga :" .$this->getMarga();
    }
    public function setMarga(string $marga)
    {
        $this->marga =$marga;
    }
    public function getMarga()
    {
        return $this->marga;
    }
}

class emi extends togar
{

}

$emi = new emi;
echo $emi->display();