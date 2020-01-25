<?php 

// function findDuplicate(){
// 	echo substr_count("Hello world. The world is nice","e");
// }

// findDuplicate();

$str = "hari apa saja saya bisa!";
$str2 = "cepat kerjakan!!!";
$str3 = "adobe";

foreach (count_chars($str, 1) as $strr => $value) {
	// var_dump($value);
	// if($value !== 1){
	// 	echo "Tidak Ada Kata Yang Berulang";
	// }else{
	// }
  	 echo chr($strr) . " occurred a number of $value times in the string." . "<br>";
}