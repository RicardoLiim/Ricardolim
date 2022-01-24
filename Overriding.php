<?php

class Bapak
{
    public $nama;
    public $marga;
    public $status;

    public function __construct
    (string $nama = "Togar", string 
    $marga ="Siregar", string 
    $status = "Bapak")
    {
        $this->nama = $nama;
        $this->marga = $marga;
        $this->status = $status;
    }

    public function getNama():String
    {
        return $this->nama;
    }    

    public function getMarga():String
    {
     return $this->marga;
    }    

    public function getStatus():String
    {   
        return $this->status;
    }       

        public function display():void
    {
        echo $this->judul(). "<br>";
        echo "nama : " . $this->getNama() . "<br>";
        echo "marga :" . $this->getMarga() . "<br>";
        echo "status :" . $this->getStatus() . "<br>";
    }
    
        public function judul() :void
        {
            echo "ini dari class ".$this->status;
        }
    
}


// $obj1 =new bapak();
// echo $obj1->display();


class Anak extends Bapak
{
    public $role;

    public function __construct(string $nama = "Asep",string $marga ="Siregar",string $status ="Anak", String $role ="Murid")

    {
 parent::__construct($nama,$marga,$status);
 $this->role =$role;       

    }
    public function displayChild():void
    {
        echo parent::display();
        echo "Role: " .$this->getRole();
    }

    public function getRole() : string
    {
        return $this->role;
    }
}

$bapak = new Bapak();

$anak1 = new Anak();
echo $bapak->display();

echo "<hr>";
echo $anak1->displayChild();
