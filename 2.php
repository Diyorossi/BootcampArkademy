<?php 

  // $username = 'jok3r'; //false
	$username = 'suparman'; //true
  // $password = 'Dap0#r'; //false
  $password = 'T3pungB#3r4s!'; //true

     function username($username){
     	if (!preg_match('/^[a-z]{5,9}$/', $username)){
    		echo 'False';
   		 }
   		 else{
   		 	echo "True";
   		 }
     }

     function password($password){
        if (!preg_match('/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*[0-9].*[0-9].*[0-9])(?=.*?[#?!@$%^&*-]).{8,}/', $password)){
    		echo 'False';
   		 }
   		 else{
   		 	echo "True";
   		 }
     }

     
     username($username);
     echo "<br>";
     password($password);
