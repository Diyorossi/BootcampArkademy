Soal 1, dan 2 Menggunakan PHP 

-- Soal 6a Query Untuk Menampilkan sesuai soal adalah :

SELECT c.name as cashier, p.name as product, g.name as category, p.price as price FROM product p join cashier c on p.id_cashier=c.id_cashier join category g on p.id_category=g.id_category

Screenshot Hasil :

![image](https://user-images.githubusercontent.com/17777914/74580409-9800b400-4fd6-11ea-8afc-d1427150097d.png)

-- Soal 6b terdapat pada folder bootcamp-statis :
Pada bagian ini merupakan tampilan halaman statik yang di buat berdasarkan acuan mockup dari figma. Yang dibuat menggunakan html, css, js serta framework Bootstrap 4 CDN.
Cara menjalankannya yaitu buka file index.html pada folder bootcamp-statis
Hasil Screenshot tampilan :

Halaman Utama  tampilan statis :
![image](https://user-images.githubusercontent.com/17777914/74580700-a4d2d700-4fd9-11ea-94c1-96a0ff6fff91.png)

Modal Tambah tampilan statis :
![image](https://user-images.githubusercontent.com/17777914/74580721-d8adfc80-4fd9-11ea-95a3-4451b969ee7a.png)

Modal Edit tampilan statis :
![image](https://user-images.githubusercontent.com/17777914/74580731-f2e7da80-4fd9-11ea-9c90-ecd45fffdd3b.png)

Modal Hapus tampilan statis :
![image](https://user-images.githubusercontent.com/17777914/74580740-05faaa80-4fda-11ea-8eac-d8d2614aabb7.png)

-- Soal 6c terdapat pada folder bootcamp-dinamis disini saya menggunakan Framework CodeIgniter 3 dan Bootstrap 4 CDN.

Berikut ini langkah dalam menjalankan file :

1. Buka folder bootcamp-dinamis
2. Jalankan sistem menggunakan xampp
3. Maka akan tampil halaman utama (home) seperti gambar di bawah :

![image](https://user-images.githubusercontent.com/17777914/73129319-5900c380-4013-11ea-8a36-7dc03f49f52e.png)

Halaman ketika melakukan penambahan data :
![image](https://user-images.githubusercontent.com/17777914/73129330-92393380-4013-11ea-9613-6709eab0b460.png)

Halaman ketika berhasil melakukan penambahan data :
![image](https://user-images.githubusercontent.com/17777914/73129338-d3314800-4013-11ea-8ce2-1379c6689af2.png)
![image](https://user-images.githubusercontent.com/17777914/73129341-e512eb00-4013-11ea-9e5b-2baac3fcec21.png)

Halaman ketika melakukan ubah data :
![image](https://user-images.githubusercontent.com/17777914/73129345-0673d700-4014-11ea-9d02-e0d9e559609a.png)

Halaman ketika berhasil melakukan perubahan data :
![image](https://user-images.githubusercontent.com/17777914/73129351-1b506a80-4014-11ea-8841-214be665cdec.png)
![image](https://user-images.githubusercontent.com/17777914/73129354-328f5800-4014-11ea-9bac-dfd63cd7861e.png)

Halaman ketika melakukan hapus data :
![image](https://user-images.githubusercontent.com/17777914/73129360-4935af00-4014-11ea-93cb-b1c043439a0f.png)

Halaman ketika berhasil melakukan hapus data :
![image](https://user-images.githubusercontent.com/17777914/73129361-581c6180-4014-11ea-972b-7454a764a462.png)
![image](https://user-images.githubusercontent.com/17777914/73129364-6f5b4f00-4014-11ea-986d-755e074bcc61.png)
