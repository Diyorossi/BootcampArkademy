function findHighestProfit(arr) { 
  
  var keuntungan = 0;
  var hari_beli = 0;
  var hari_jual = 0;
  

  // ini memungkinkan loop kita untuk terus mengulangi pembelian
  // harga sampai harga saham murah ditemukan
  var change_buy_index = true;
  

  //melakukan loop sebanyak jumlah array
  for (var i = 0; i < arr.length-1; i++) {
    

    //harga jual adalah elemen berikutnya dalam daftar
    hari_jual = arr[i+1]; 
    

     // jika kita belum menemukan harga beli murah yang cocok
     // maka menetapkan harga beli sama dengan elemen saat ini
    if (change_buy_index) { hari_beli = arr[i]; }
    

    // jika harga jual lebih rendah dari harga beli
    //maka kita tidak bisa mendapat untung jadi akan berlanjut ke
    //elemen berikutnya dalam daftar yang akan menjadi harga beli baru
    if (hari_jual < hari_beli) {
      change_buy_index = true; 
      continue;
    }
    
    // jika harga jual lebih besar dari harga beli
    // di periksa untuk melihat apakah kedua indeks ini lebih untung
    else { 
      var temp_profit = hari_jual - hari_beli;
      if (temp_profit > keuntungan) { keuntungan = temp_profit; }
      change_buy_index = false;
    }
    
  }
  if(keuntungan===0){
      keuntungan = "Tidak bisa mendapatkan profit pada hari-hari ini";
//      console.log(keuntungan);
  }
    return keuntungan;
}

console.log(findHighestProfit([10, 2, 11, 20, 3, 5]));  //Output : 18
// console.log(findHighestProfit([33, 29, 11, 3]));   //Output : Tidak bisa mendapatkan profit pada hari-hari ini