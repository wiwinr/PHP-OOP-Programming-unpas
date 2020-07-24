<?php 

require_once 'App/init.php';

// $produk1 = new komik("Naruto", "Masashi Kisimoto", "shonen Jump", 30000, 100);
// $produk2 = new game("Uncherted", "Neil Druckmann", "Sonny Computer", 2500000,50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahproduk($produk1);
// $cetakProduk->tambahproduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";  

use App\Service\User as ServiceUser;
new ServiceUser();
echo "<br>";
use App\Produk\User as ProdukUser;
new ProdukUser();