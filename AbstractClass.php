<?php
abstract class product
{
    abstract public function judul(String $nama) :void;
}

class Buku extends product
{
    public $nama;
    public function __construct(string $nama ="Moralands")
    {
        $this->nama = $nama;
    }
    public function getNama():string
    {
        return $this->nama;
    }

    public function judul(string $nama) :void
    {
        $this->nama = $nama;
    }

    public function getJudul()
    {
        return $this->nama;
    }
}

$buku1 =new Buku();

echo $buku1->getJudul();