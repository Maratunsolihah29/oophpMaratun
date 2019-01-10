<?php 

// define('NAMA', 'Maratun Solihah');
// echo NAMA;

// echo "<br>";

// const UMUR = 17;
// echo UMUR;

// class Coba {
// 	const NAMA = 'Maratun'; 
// }

// echo Coba::NAMA; 



// echo __FILE__;

// func tion coba() {
// 	return __FUNCTION__;
// }
 

// echo coba();
 
 class Coba {
 	public $kelas = __CLASS__;
 }

 $obj = new Coba;
 echo $obj->kelas; 
 ?>
