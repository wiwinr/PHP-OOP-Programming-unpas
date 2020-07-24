<?php 

// require_once 'App/Produk/InfoProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Komik.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/CetakInfoProduk.php';


spl_autoload_register(function ($class){
	// memanggil "semua" class yang ada didalam folde Produk
	require_once __DIR__ . '/Produk/' . $class . '.php';

});