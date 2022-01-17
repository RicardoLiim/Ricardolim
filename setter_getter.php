<?php
class contoh2
{
    // public $nama;
    // private $harga;

    public function __construct(string $nama =  "kopi", int $harga = 1000)
    {
        $this->nama=$nama;
        $this->harga=$harga;
    }
    
    public function setHarga(string $harga)

    {
        $this->harga= $harga;
    }
    public function getHarga()
    {
        return $this->harga;
    }
    public function setNama(string $nama)
    
    {
        $this->nama= $nama;
    }
    public function getNama()
    {
        return $this->nama;
    }
    public function display():void
    {
        echo "harga : ".$this->getHarga();
        echo "<br>";
        echo "nama  : ".$this->getNama();
    }
}
$contoh1 = new contoh2();
$contoh1->setNama("buku");
$contoh1->setHarga(2000);

echo $contoh1->display();
