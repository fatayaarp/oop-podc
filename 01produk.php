<?php 

// List Produk Kendaraaan
// Mobil : Merek | Warna, Tenaga : 0 hp (Rp. harga )
// Motor : Merek | Warna, Tenaga : 0 hp (Rp. harga )

class Kendaraan {
    public  $merek = "merek", 
            $warna = "warna", 
            $tenaga = 0, 
            $harga = 0;

    public function getLabel() {
        $str = "{$this->merek} | {$this->warna}, Tenaga : {$this->tenaga} (Rp.{$this->harga} Juta)";
        return $str;
    }
}

$produk1 = new Kendaraan();

$produk1->merek = "Toyota";
$produk1->warna = "Silver";
$produk1->tenaga = 106;
$produk1->harga = 250;

$produk2 = new Kendaraan();

$produk2->merek = "Yamaha";
$produk2->warna = "Hitam";
$produk2->tenaga = 15;
$produk2->harga = 36;

echo $produk1->getLabel();
echo "<hr>";
echo $produk2->getLabel();


// $produk1->helo();

?>