<?php 

class game extends Produk implements InfoProduk{

	public $waktumain;

	public function __construct( $judul= "judul", $penulis = "penulis" , $penerbit = "Penerbit", $harga = 0,  $waktumain = 0){

		parent::__construct($judul, $penulis, $penerbit , $harga );

		$this->waktumain = $waktumain;
	}

	public function getInfo(){

		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}


	//implementasi class abstract getinfoproduk
	public function getinfoproduk(){
		$str = "game : " . $this->getInfo() ." ~ {$this->waktumain} Jam.";
		return $str;

	}
}
