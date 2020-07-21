<?php 
//jualan produk
//komik
//game

class Produk {

	public 	$judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlhalaman,
			$waktumain,
			$tipe;
			
	public function __construct( $judul= "judul", $penulis = "penulis" , $penerbit = "Penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlhalaman = $jmlhalaman;
			$this->waktumain = $waktumain;
			$this->tipe = $tipe;
			
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}		

	public function getlengkap(){

		//komik : Naruto | Masashi kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		if( $this->tipe == "komik"){
			$str.= " - {$this->jmlhalaman} Halaman.";
		}else if ( $this->tipe == "game"){
			$str .= " ~ {this->waktumain} Jam.";
		}
		return $str;
	}


}

class CetakInfoProduk {
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("NAruto", "Masashi Kisimoto", "shonen Jump", 30000, 100, 0, "komik");
$produk2 = new Produk("Uncherted", "Neil Druckmann", "Sonny Computer", 2500000, 0, 50, "game");


echo $produk1->getlengkap();
echo "<br>";
echo $produk2->getlengkap();


 ?>