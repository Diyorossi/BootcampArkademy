<!-- Format Username:
Disarankan menggunakan REGEX 
1. Username harus diawali huruf kecil, 
2. tidak boleh ada huruf besar, 
3. tidak boleh menggunakan special character kecuali ‘ . ’ (titik) dan ‘ ’ (underscore), 
4. minimal 8 karakter dan maksimal 12 karakter
● Format Password: 
1. merupakan 9 digit karakter dengan kombinasi
minimal 1 simbol dan 1 angka. -->
<?php 

	// $username = 'johnsmith26'; //true
	$username = 'JOHNSmith'; //false
	$password = 'j0hn5m!th'; //true

     function username($username){
     	if (!preg_match('/^[a-z0-9_.]{8,12}$/', $username)){
    		echo 'False';
   		 }
   		 else{
   		 	echo "True";
   		 }
     }

     function password($password){
     	if (!preg_match('/^[a-z0-9_.!@#$%]{9}$/', $password)){
    		echo 'False';
   		 }
   		 else{
   		 	echo "True";
   		 }
     }

     username($username);
     echo "<br>";
     password($password);
