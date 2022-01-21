<?php

class barang
{
    private $harga;
    private $diskon;

    public function __construct(int $harga = 5000 ,int $diskon = 5)
    {
        $this->harga = $harga;
        $this->diskon =$diskon;
}
    public function getTotal(int $jumlahjam)
    {
    $total = 0;

    if($jumlahjam >=5)
        {
            $total += $jumlahjam * $this->harga;
            return $total;
        }
            else if ($jumlahjam >=6 && $jumlahjam <=10)
        {
            $total += $jumlahjam *$this->harga;
        }else{
            return $total;
        }
    }
}

$barang = new barang();
echo $barang->getTotal(jumlahjam: 16);