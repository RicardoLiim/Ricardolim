<?php

class User 
{
    public $nama;

    public function __construct($nama = "")
    {
        $this->nama = $nama;
    }
}

$user1 = new User;

echo $user1->nama = "RICARDO";