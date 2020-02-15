<?php 

// $color = '#eee'; //true
// $color = '#F3F3F3'; //true
$color = '#ezff8d'; //false

function KodeWarna($color){
	if(!preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', $color)){
		echo "Format Hex Code salah!";
	}else{
		echo "Format Hex Code benar!";
	}
}

KodeWarna($color);