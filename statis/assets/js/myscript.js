//Tambah Cashier
const flashDataTambahCashier = $('#flash-data-tambahcashier').data('flashdata'); //ngambil dari htmlnya (jquery tolong carikan saya elemen yg namanya flash-data lalu ambil datanya yg namanya flash-data)
// console.log(flashDataTambahCashier); //vardump atau console buat cek isinya
if(flashDataTambahCashier) {
	Swal({
		title: 'Data Cashier ',
		text: 'Berhasil ' + flashDataTambahCashier,
		type: 'success'
	});
}
// Hapus Cashier
$('.tombol-hapuscashier').on('click', function (e){
e.preventDefault(); //aksi defaultnya itu dia ga akan menjalankan href
const href = $(this).attr('href'); 

Swal({
  title: 'Yakin ingin menghapus',
  text: "Data ini",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText:'Batal',
  confirmButtonText: 'Hapus Data!'
}).then((result) => {
  if (result.value) {
    document.location.href = href;
  }
})
});