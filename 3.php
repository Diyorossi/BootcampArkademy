<?php 		

$karakter = 'Javascript'; 
$jml_karakter = 'x';

function CountChar($karakter, $jml_karakter){
$count = 0;
for($i=0;$i < strlen($karakter); $i++){
    $flag = 0;
    $j=0;
    if(strtolower($karakter[$i]) == $jml_karakter[$j])
    {
     //echo "match";
        $flag = 1;
        $k = $i;
        for($j< strlen($jml_karakter); $j++;){//echo "[".$j . $k."] $count $flag";
            if(strtolower($karakter[$k]) != $jml_karakter[$j]){
                $flag = 0;
                break;
            }
            $k++;
        }//echo "<br> $flag";
    }
    if($flag == 1){
        $count++;
        $flag = 0;
    }
}
if($count == 0){
	$count = "Not Found";
	return $count;
}
return $count;
}

echo CountChar($karakter, $jml_karakter);