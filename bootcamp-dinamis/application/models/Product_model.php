<?php 
class Product_model extends CI_Model{
	public function getProduct(){
		$data = $this->db->query(" SELECT p.id_product, c.name as cashier, p.name as product, g.name as category, p.price as price FROM product p join cashier c on p.id_cashier=c.id_cashier join category g on p.id_category=g.id_category ");
		return $data->result();
	}

	public function addProduct($produk, $harga, $kategori, $idkasir){
		$data = $this->db->query(" INSERT INTO `product`(`id_product`, `name`, `price`, `id_category`, `id_cashier`) VALUES (\"\",\"$produk\",\"$harga\",\"$kategori\",\"$idkasir\") ");
	}

	public function deleteProduct($idproduk){
		$data = $this->db->query(" DELETE FROM `product` WHERE id_product = \"$idproduk\" ");
	}

	// public function updateProduct($idproduk, $produk, $harga, $kategori, $idkasir){
	// 	$data = $this->db->query(" UPDATE `product` SET `name`=\"$produk\",`price`=\"$harga\",`id_category`=\"$kategori\",`id_cashier`=\"$idkasir\" WHERE \"$idproduk\" ");
	// }

	public function updateProduct($idproduk, $produk, $harga){
		$data = $this->db->query(" UPDATE `product` SET `name`=\"$produk\",`price`=\"$harga\" WHERE \"$idproduk\" ");
	}
}