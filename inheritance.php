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
			$waktumain;
		
			
	public function __construct( $judul= "judul", $penulis = "penulis" , $penerbit = "Penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlhalaman = $jmlhalaman;
			$this->waktumain = $waktumain;
			
			
	}

	
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}		

	
	public function getinfoproduk(){

		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}


}



class komik extends Produk{
	public function getinfoproduk(){
		$str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
		return $str;
	}
}

class game extends Produk{
	public function getinfoproduk(){
		$str = "game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktumain} Jam.";
		return $str;

	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new komik("Naruto", "Masashi Kisimoto", "shonen Jump", 30000, 100, 0);
$produk2 = new game("Uncherted", "Neil Druckmann", "Sonny Computer", 2500000, 0, 50);


echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();


 ?>