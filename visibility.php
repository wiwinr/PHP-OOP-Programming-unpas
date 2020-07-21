<?php 
//jualan produk
//komik
//game

class Produk {

	public 	$judul,
			$penulis,
			$penerbit;

	protected	$discon = 0;

	private	$harga;
		
			
	public function __construct(
		$judul= "judul",
		$penulis = "penulis" ,
		$penerbit = "Penerbit",
		$harga = 0
	){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;

	}


	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}		

	public function getHarga(){
		return $this->harga -( $this->harga * $this->discon /100);
	}
	
	public function getinfoproduk(){

		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}


}



class komik extends Produk{
	public $jmlhalaman;

	public function __construct(
		$judul= "judul",
		$penulis = "penulis" ,
		$penerbit = "Penerbit",
		$harga = 0,
		$jmlhalaman
	){
		parent::__construct($judul, $penulis, $penerbit , $harga );

		$this->jmlhalaman = $jmlhalaman;
	}



	public function getinfoproduk(){
		$str = "komik : " . parent::getinfoproduk() ." - {$this->jmlhalaman} Halaman.";
		return $str;
	}
}

class game extends Produk{

	public $waktumain;

	public function __construct( $judul= "judul", $penulis = "penulis" , $penerbit = "Penerbit", $harga = 0,  $waktumain = 0){

		parent::__construct($judul, $penulis, $penerbit , $harga );

		$this->waktumain = $waktumain;
	}

	public function setDiskon($discon){
		$this->discon = $discon;
	}

	public function getinfoproduk(){
		$str = "game : " . parent::getinfoproduk() ." ~ {$this->waktumain} Jam.";
		return $str;

	}
}

class CetakInfoProduk {
	public function cetak(Produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new komik("Naruto", "Masashi Kisimoto", "shonen Jump", 30000, 100);
$produk2 = new game("Uncherted", "Neil Druckmann", "Sonny Computer", 2500000,50);

echo $produk1->getinfoproduk();
echo "<br>";
echo $produk2->getinfoproduk();
echo "<hr>";

$produk2->setDiskon(85);
echo $produk2->getharga();
 ?>