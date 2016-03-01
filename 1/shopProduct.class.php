<?php
class ShopProduct {
	public $title = '';
	public $producer = '';
	public $price = '';
	public $numpages = '';
}

$product = new ShopProduct();

$product->title = 'Мастер и Маргарита';
$product->producer = 'Булгаков';
$product->price = '99';
$product->numpages = '400';

var_dump($product);
?>