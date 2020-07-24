<?php 

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
