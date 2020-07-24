<?php 

class komik extends Produk implements InfoProduk{
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

	public function getInfo() {

		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

	public function getinfoproduk(){
		//implementasi class abstract getinfoproduk
		$str = "komik : " . $this->getInfo() ." - {$this->jmlhalaman} Halaman.";
		return $str;
	}
}