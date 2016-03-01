<?php
class ShopProduct {
	public $title = '';
	public $producer = '';
	public $price = '';
	
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
			   '499',
			   '350');

$cd = new Cd('Звездные войны',
			   'Джордж Лукас',
			   '2199',
			   '90');

$book->getSummaryLine();
$cd->getSummaryLine();
// $writer = new ShopProductWriter();
// $writer->write($product);
?>