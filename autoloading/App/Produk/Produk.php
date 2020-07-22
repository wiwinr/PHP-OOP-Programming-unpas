<?php 
Abstract class Produk {

	protected $judul,
			$penulis,
			$penerbit,
			$discon = 0,
			$harga;
		
			
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

	abstract public function getInfo();

}