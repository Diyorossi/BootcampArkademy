Soal 1, dan 2 Menggunakan PHP 

Soal 6a Query Untuk Menampilkan sesuai soal adalah 

SELECT c.name as cashier, p.name as product, g.name as category, p.price as price FROM product p join cashier c on p.id_cashier=c.id_cashier join category g on p.id_category=g.id_category

Soal 6b terdapat pada folder bootcamp-statis

Soal 6c terdapat pada folder bootcamp-dinamis disini saya menggunakan Framework CodeIgniter 3 dan Bootstrap 4 CDN.

Berikut ini langkah dalam menjalankan file :

1. Buka folder bootcamp-dinamis
2. Jalankan sistem menggunakan xampp
3. Maka akan tampil halaman utama (home) seperti gambar di bawah :

![image](https://user-images.githubusercontent.com/17777914/73129319-5900c380-4013-11ea-8a36-7dc03f49f52e.png)
