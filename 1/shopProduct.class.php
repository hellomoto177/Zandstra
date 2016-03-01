<?php
class ShopProduct {
	public $title = '';
	public $producer = '';
	protected $price = '';
	public $discount = '';
	
	public function __construct($title, $producer, $price) {
		$this->title = $title;
		$this->producer = $producer;
		$this->price = $price;
	}

	public function getSummaryLine() {
		print('Название: ' . $this->title . "\n");
		print('Создатель: ' . $this->producer . "\n");
		print('Цена: ' . $this->price . "\n");
	}

	public function getPrice() {
		if($this->discount > 0)
			print($this->price - ($this->price/100*$this->discount));
		else
			print($this->price);
	}
}

class Book extends ShopProduct {
	public $numPages = '';

	public function __construct($title, $producer, $price, $numPages) {
		parent::__construct($title, $producer, $price);
		$this->numPages = $numPages;
	}

	public function getSummaryLine() {
		$res = parent::getSummaryLine();
		$res .= 'Количество страниц: ' . $this->numPages . "\n";
		print($res);
	}

}

class Cd extends ShopProduct {
	public $playLength = '';

	public function __construct($title, $producer, $price, $playLength) {
		parent::__construct($title, $producer, $price);
		$this->playLength = $playLength;
	}

	public function getSummaryLine() {
		$res = parent::getSummaryLine();
		$res .= 'Продолжительность: ' . $this->playLength . "\n";
		print($res);
	}
}

class ShopProductWriter {
	public function write(ShopProduct $product) {
		print("Писатель: $product->producer\n");
	}
}

/* КЛИЕНТСКИЙ КОД */

$book = new Book('Мастер и Маргарита',
			   'Булгаков',
			   '500',
			   '350');

$cd = new Cd('Звездные войны',
			   'Джордж Лукас',
			   '2199',
			   '90');


// $book->getSummaryLine();
// $book->discount = '5';
// $book->getPrice();

$cd->getSummaryLine();
$cd->discount = '50';
$cd->getPrice();
// $writer = new ShopProductWriter();
// $writer->write($product);
?>