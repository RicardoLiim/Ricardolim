<?php

class ContohStatic
{
    public static $nama ="nama variable";

    public static function all()
    {
        echo "ini contoh function static";
    }
}

class subStatic extends ContohStatic
{

}

echo ContohStatic::$nama;

echo ContohStatic::$nama;

echo "<br>";
echo ContohStatic::all();