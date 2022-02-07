<?php

class searcharray
{
    public $names = ["kelmi","suryanto","steven"];
    public bool $search = false;

    public function getAllname():searcharray
    {
        $index = 1;
        echo "Nama seluruh siswa <br>";
        foreach($this->names as $name)
        {
            echo $index++ . "." . $name . "<br>";
            
        }
        return $this;
    }
    public function searchName(string $searchName):void
    {
        echo "nama [" . $searchName . "] . <br>";
        for ($o = 0; $o < count($this->names); $o++)
        {
            if($searchName == $this->names[$o])
            {
                $this->search = true;
                echo "nama [" . $this->names[$o] . "] ada di dalam array :" . ($o+1);
            }
        }
        if($this->search == false)
        {
            echo "nama [" . $searchName . "] tidak ada di dalam array :";
        }

    }
}
$searchValue = new searcharray();
echo $searchValue->getAllName() ->searchName($searchName = "jujn");
