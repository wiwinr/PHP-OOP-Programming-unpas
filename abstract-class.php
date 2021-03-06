<?php 
//jualan produk
//komik
//game

abstract class Produk {

	private $judul,
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

	public function setjudul($judul){
		$this->judul =$judul;
	}

	public function getjudul(){
		return $this->judul;
	}

	public function setpenulis($penulis){
		$this->penulis = $penulis;
	}

	public function getpenulis(){
		return $this->penulis;
	}

	public function setpenerbit($penerbit){
		$this->penerbit = $penerbit;
	}

	public function getpenerbit(){
		return $this->penerbit;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}		


	public function setDiskon($discon){
		$this->discon = $discon;
	}

	public function getDiscon() {
		return $this->discon;
	}		


	public function setharga($harga){
		return $this->harga;
	}

	public function getHarga(){
		return $this->harga -( $this->harga * $this->discon /100);
	}
	
	// abstract class
	abstract public function getinfoproduk();

	public function getInfo(){

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
		//implementasi class abstract getinfoproduk
		$str = "komik : " . $this->getInfo() ." - {$this->jmlhalaman} Halaman.";
		return $str;
	}
}

class game extends Produk{

	public $waktumain;

	public function __construct( $judul= "judul", $penulis = "penulis" , $penerbit = "Penerbit", $harga = 0,  $waktumain = 0){

		parent::__construct($judul, $penulis, $penerbit , $harga );

		$this->waktumain = $waktumain;
	}

	//implementasi class abstract getinfoproduk
	public function getinfoproduk(){
		$str = "game : " . $this->getInfo() ." ~ {$this->waktumain} Jam.";
		return $str;

	}
}

class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahproduk(Produk $produk){
		$this->daftarProduk[] = $produk;
	}
	public  function cetak(){
		$str = "Daftar Produk : <br>";
		foreach( $this->daftarProduk as $p){
			$str .= "- {$p->getinfoproduk()} <br>";
		}  
		return $str;
	}
}

//instansiasi
$produk1 = new komik("Naruto", "Masashi Kisimoto", "shonen Jump", 30000, 100);
$produk2 = new game("Uncherted", "Neil Druckmann", "Sonny Computer", 2500000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahproduk($produk1);
$cetakProduk->tambahproduk($produk2);
echo $cetakProduk->cetak();
