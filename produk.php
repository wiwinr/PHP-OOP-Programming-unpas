<?php 
//jualan produk
//komik
//game

class Produk {

	public 	$judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}		


}

//instance product
// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "ancarted";
// $produk2->tambahProperty = "hahahah";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 3000;

var_dump($produk3);
echo "Komik Naruto : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();

echo"<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncarted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
 ?>