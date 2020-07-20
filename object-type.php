<?php 
//jualan produk
//komik
//game

class Produk {

	public 	$judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct( $judul= "judul", $penulis = "penulis" , $penerbit = "Penerbit", $harga = 0 ){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}		


}

class CetakInfoProduk {
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("NAruto", "Masashi Kisimoto", "sonen Jump", "Shonen Jump", 30000 );
$produk2 = new Produk("Uncherted", "Neil Druckmann", "Sonny Computer", 2500000 );


echo "Komik : " .$produk1->getLabel();
echo "<br>";
echo "Game :" .$produk2->getLabel();
echo "<br>";

$InfoProduk1 = new CetakInfoProduk();
echo "<br>";
echo $InfoProduk1->cetak($produk1);

 ?>