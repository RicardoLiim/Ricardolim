<?php

class Bapak
{
    public static String $judul ="ini dari class bapak";
    public static function getJudul():string
    {
        return static::$judul;
    }
    public static function showClass()
    {
        return new static;
    }
}

class anak extends Bapak
{
    public static string $judul ="ini dari class anak";
}

echo Bapak::getjudul();
echo "<br>";
echo var_dump(Bapak::showClass());
echo "<br>";
echo "<hr>";
echo anak::getjudul();
echo "<br>";
echo var_dump(anak::showClass());