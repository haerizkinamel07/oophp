<?php

class Produk{
	public $judul = "judul",
	$penulis = "penulis",
	$penerbit = "penerbit",
	$harga = 0;


	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 30000;


$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->penulis = "Neil Druckman";
$produk2->penerbit = "Sony computer";
$produk2->harga = 250000;

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Komik : " . $produk2->getLabel();




