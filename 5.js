function findHighestProfit(arr) { 
  
  var keuntungan = 0;
  var hari_beli = 0;
  var hari_jual = 0;
  
  var change_buy_index = true;
  
  for (var i = 0; i < arr.length-1; i++) {
    
    hari_jual = arr[i+1]; 
    
    if (change_buy_index) { hari_beli = arr[i]; }
    
    if (hari_jual < hari_beli) {
      change_buy_index = true; 
      continue;
    }
    
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