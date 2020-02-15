<?php 		

// $kalimat = "Hesti Liu";
// $huruf = "e";

// $result = substr_count($kalimat, $huruf);
// echo ($kalimat);
// echo "<br>";
// if(!empty($result)){
// echo "Jumlah huruf $huruf pada kalimat $kalimat adalah $result";
// }else{
// 	echo "Not Found";
// }

// $inputstring="abcd";
//  $tmp = '';    $i = 0;

//    while (isset($inputstring[$i])){
//         $tmp .= $inputstring[$i];
//         $i++;
//     }

// echo $i; //final string count
// echo "<br>";
// echo $tmp; // Read string

// function mystrlen($str)
// {
// $count = 0;
// for($i=0; $i<strlen($str); $i++)
// {
// if(@$str[$i] != "")
// 	{$count++;
// }else{	
// break;
// }
// }
// return $count;
// }
// $string = "Arkayalo";
// echo mystrlen($string);



$string = 'Arka'; 

$sub_string = 'a';

$count = 0;
for($i=0;$i < strlen($string); $i++){

    $flag = 0;
    $j=0;
    if(strtolower($string[$i]) == $sub_string[$j])
    {
        //echo "match";
        $flag = 1;
        $k = $i;
        for($j< strlen($sub_string); $j++;){//echo "[".$j . $k."] $count $flag";
            if(strtolower($string[$k]) != $sub_string[$j]){
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

echo $count;