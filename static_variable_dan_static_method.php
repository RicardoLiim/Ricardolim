<?php

class ContohStatic
{
    public static $nama =["rendi","asep","rezi"];
    public static $index =1;
    public static function all()
    {
        $index = 1;

        foreach(self::$nama as $na)
        {
            echo $index++ .".".$na . "<br>";
        }
        
    }

public function display()
    {
     echo self::all();
    }
}

class subStatic extends ContohStatic
{

}

echo "<br>";

$obj2 = new subStatic();

echo $obj2->display();