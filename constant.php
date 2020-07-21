<?php 

// define('NAMA' , 'wiwin ristanto');

// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;





// class Coba{
// 	const NAMA = 'wiwin';
// }

// echo Coba:: NAMA;
// 

// function coba(){
// 	return __FUNCTION__;
// }

// echo coba();


class coba{
	public $kelas = __CLASS__;
}


$obj = new coba;
echo $obj->kelas;
